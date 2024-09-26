<?php

namespace App\Http\Controllers;

use App\Http\Requests\FamilleRequest;
use App\Models\Famille;
use App\Models\Produit;
use App\Models\SousFamille;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class FamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('search1')) {
            $familles = Famille::where('libelle', "like", '%' . request('search1') . '%')->paginate(6);
        } else {

            $familles = Famille::query()->latest()->paginate(6);
        }
        $table = 'familles';
        return view('Backend.Familles.index', compact('familles', 'table'));
    }
    /**  
     * display all the  categories
     */
    public function  Categories()
    {
        $Sub_fam = SousFamille::distinct('famille_id')->pluck('famille_id')->toArray();
        $familles = Famille::whereIn('id', $Sub_fam)->get();
        // $familles = Famille::all(); 
        $sous_familles = SousFamille::all();
        return  view('Frontend.pages.categories_list',compact('familles','sous_familles'));
    }
    /**  
     * display all the sub categories
     */
    public function  Sub_Categories()
    {
        return  view('Frontend.pages.sub_categories_list');
    }

    /**
     * Display a listing of the resource in home page.
     */
    public function familleDetail(Request $request, string $id)
    {

        $famille = Famille::findOrfail($id);
        $sous_famille = SousFamille::where('famille_id', 'LIKE', "{$id}")->paginate(8);
        $Produits = Produit::all();
        // foreach ($sous_famille as $sofam) {
        //     foreach ($Produits as $item) {

        //         // if ($sofam->id == $item->sous_famille_id){

        //         //     $sofam_id =  $sofam->id;

        //         // }
        //     }
        // }
        // $Produits = Produit::where('sous_famille_id', 'LIKE', "{$sofam->id}")->paginate(8);
        // dd($Produits);     
        return view('Frontend.pages.categories', compact('famille', 'Produits', 'sous_famille'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $table = 'familles';

        return view('Backend.Familles.create', compact('table'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'libelle' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:1024',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');
        $famille = new Famille([
            'libelle' => $request->get('libelle'),
            'image' => $imagePath,
        ]);
        $famille->active = $request->has('active') ? true : false;
        // dd($famille);
        $famille->save();
        return redirect()->route('familles.index')->with('success', 'Famille Ajouteé avec succés');
    }

    /**
     * Display the specified resource.
     */
    public function show(Famille $famille)
    {
        if (!$famille) {
            abort(404);
        }
        return view('Backend.Familles.show', ['famille' => $famille]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Famille $famille)
    {
        $table = 'familles';
        return view('Backend.Familles.edit', compact('famille', 'table'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Famille $famille)
    {
        if ($request->hasFile('image')) {
            // Store the new image file
            $imagePath = $request->file('image')->store('images', 'public');
            // Update the image path attribute of the famille model
            $famille->image = $imagePath;
        }
        $famille->active = $request->has('active') ? true : false;
        // Update other attributes
        $famille->libelle = $request->input('libelle');



        // Save the updated model
        $famille->save();

        return redirect()->route('familles.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Famille $famille)
    {
        $famille->delete();
        return redirect()->route(('familles.index'));
    }
}
