<?php

namespace App\Http\Controllers;

use App\Mail\userMail;
use App\Models\Famille;
use App\Models\marque;
use App\Models\Produit;
use App\Models\Review;
use App\Models\SousFamille;
use App\Models\unite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('search1')) {
            $produits = Produit::where('designation', "like", '%' . request('search1') . '%')->paginate(6);
        } else {
            $produits = Produit::query()->latest()->paginate(6);
        }
        $sous_familles  = SousFamille::all();
        $table = 'Produits';
        return view('Backend.Produits.index', compact('produits', 'sous_familles', 'table'));
    }   

    /**
     * Display a listing of the resource in home page.
     */
    public function product(string $id)
    {
        $produit = Produit::findOrFail($id);
        $sous_familles =SousFamille::all();
        $familles = Famille::all();
        $produits = Produit::all();
        $marks = marque::all();
        
        $reviews = Review::where('produit_id','LIKE',"{$id}")->paginate(8);
        return view('Frontend.pages.product',compact('familles','sous_familles','produits','produit','reviews','marks'));
    }

    public function sort(Request $request)
    {

        $orderby = $request->input('orderby');
    
        // Perform sorting logic based on $orderby value
        switch ($orderby) {
            case 'popularity':
                $produits = Produit::orderBy('popularity_column')->get();
                break;
            case 'rating':                
                $produits = Produit::query()->leftJoin('reviews', 'produits.id', '=', 'reviews.produit_id')
                ->select('produits.id', 'produits.designation','produits.image','produits.description','produits.sous_famille_id', 'produits.prix_ht', 'produits.prix_vente', DB::raw('AVG(reviews.rating) as average_rating'))
                ->groupBy('produits.id', 'produits.designation','produits.image','produits.description','produits.sous_famille_id', 'produits.prix_ht', 'produits.prix_vente')
                ->orderBy('average_rating', 'desc')->paginate(8);
            
                //  = Produit::orderBy('rating_column')->get();
                break;
            case 'date':
                $produits = Produit::orderBy('created_at', 'desc')->paginate(6);
                break;
            case 'price':
                $produits = Produit::orderBy('prix_vente')->paginate(6);
                break;
            case 'price-desc':
                $produits = Produit::orderByDesc('prix_vente')->paginate(6);
                break;
            default:
                // Default sorting
                $produits = Produit::paginate(12);
                break;
        }
        // Pass sorted data to the view
        $Products = Produit::distinct('marque_id')->pluck('marque_id')->toArray();
        $marques = marque::whereIn('id', $Products)->get();
        foreach ($marques as $category) {
            $category->Produit_count = Produit::where('marque_id', $category->id)->count();
        }

        $Products = Produit::distinct('sous_famille_id')->pluck('sous_famille_id')->toArray();
        $Sub_fam = SousFamille::whereIn('id', $Products)->get();
        foreach ($Sub_fam as $category) {
            $category->Produit_count = Produit::where('sous_famille_id', $category->id)->count();
        }

        $sous_familles = SousFamille::all();
        $familles = Famille::all();
        return view('Frontend.pages.product_list', compact('sous_familles', 'produits','marques','familles','Sub_fam'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $familles = SousFamille::all();
        $Marques = marque::all();
        $Unites = unite::all();
        $table = 'createProduits';

        return view('Backend.Produits.create', compact('familles', 'Marques', 'Unites', 'table'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //    $request->validate([
        //     'designation'=>'required',
        //     'image'=>'required|image|mimes:jpg,png,jpeg|max:1024',
        // ]);

        $imagePath = $request->file('image')->store('images', 'public');
        $Prdouits = new Produit([
            'designation' => $request->get('designation'),
            'prix_ht' => $request->get('prix_ht'),
            'prix_vente' => $request->get('prix_vente'),
            'codebarre' => $request->get('codebarre'),
            'description' => $request->get('description'),
            'unite_id' => $request->get('unite_id'),
            'marque_id' => $request->get('marque_id'),
            'sous_famille_id' => $request->get('sous_famille_id'),
            'description' => $request->get('description'),
            'tva' => $request->get('tva'),
            'image' => $imagePath,
        ]);

        $Prdouits->featured_product = $request->has('featured_product') ? true : false;
        // dd($Prdouits);
        $Prdouits->save();
        return redirect()->route('Produits.index')->with('success', 'Produit ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produit = Produit::findOrFail($id);
        $familles = SousFamille::all();
        $Marques = marque::all();
        $Unites = unite::all();
        $table = 'createProduits';

        return view('Backend.Produits.edit', compact('familles', 'produit', 'Marques', 'Unites', 'table'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produit = Produit::findOrFail($id);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $produit->image = $imagePath;
        }
        // Update other attributes
        $produit->designation = $request->get('designation');
        $produit->prix_ht = $request->get('prix_ht');
        $produit->prix_vente = $request->get('prix_vente');
        $produit->codebarre = $request->get('codebarre');
        $produit->description = $request->get('description');
        $produit->unite_id = $request->get('unite_id');
        $produit->marque_id = $request->get('marque_id');
        $produit->sous_famille_id = $request->get('sous_famille_id');
        $produit->description = $request->get('description');
        $produit->tva = $request->get('tva');
        $produit->featured_product = $request->has('featured_product') ? true : false;
        // Save the updated model
        $produit->save();

        return redirect()->route('Produits.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();
        return redirect()->route(('Produits.index'))->with('success', 'Prduité supprimé avec success');
    }
}
