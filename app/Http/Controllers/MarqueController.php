<?php

namespace App\Http\Controllers;

use App\Models\Famille;
use App\Models\marque;
use App\Models\Produit;
use App\Models\SousFamille;
use Illuminate\Http\Request;

class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('search1'))
        {
            $marques = marque::where('marque',"like", '%' .request('search1').'%')->paginate(6);
        }
        else
        {
            $marques = marque::query()->latest()->paginate(6);
        }
        $table ='Marques';
        return view('Backend.Marques.index', compact('marques','table'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $table ='Marques';

        return view('Backend.Marques.create',compact('table'));   
     }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'marque'=>'required',
            'image'=>'required|image|mimes:jpg,png,jpeg|max:1024',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');
       
        $marques =  new marque([
            'marque'=>$request->get('marque'),
            'image' => $imagePath,
        ]);
        $marques->active = $request->has('active') ? true : false;

        $marques->save();

        return redirect()->route('marques.index')->with('success', 'Marque ajouté avec succès.');       }

    /**
     * Display the specified resource.
     */
    public function show(marque $marque)
    {
        //
    }
    
    /**
     * Display the specified resource.
     */
    public function showBrand(string $id)
    {
        $brand = marque::findOrFail($id);
        
        $Products = Produit::distinct('sous_famille_id')->pluck('sous_famille_id')->toArray();
        $Sub_fam = SousFamille::whereIn('id', $Products)->get();
        foreach ($Sub_fam as $category) {
            $category->Produit_count = Produit::where('sous_famille_id', $category->id)->count();
        }
        $produits = Produit::query()->paginate(10);
        
        $Products = Produit::distinct('marque_id')->pluck('marque_id')->toArray();
        $marques = marque::whereIn('id', $Products)->get();
        foreach ($marques as $category) {
            $category->Produit_count = Produit::where('marque_id', $category->id)->count();
        }
        // $sub_cat = SousFamille::all();    
        $familles = Famille::all();    
        return view('Frontend.pages.brand',compact('marques','brand','produits','Sub_fam','familles'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(marque $marque)
    {
        $marque;
        $table ='Marques';

        return view('Backend.Marques.edit',compact('table','marque'));     }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, marque $marque)
    {
         if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images','public');
        $marque->image = $imagePath;
    }
    $marque->active = $request->has('active') ? true : false;

        $marque->marque = $request->input('marque');

        $marque->save();

        return redirect()->route('marques.index');   
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(marque $marque)
    {
        $marque->delete();
        return redirect()->route(('marques.index'));
        }
}
