<?php

namespace App\Http\Controllers;

use App\Models\Famille;
use App\Models\marque;
use App\Models\Produit;
use App\Models\SousFamille;
use Illuminate\Http\Request;

class HomeControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Famille::all();
        $sub_categories = SousFamille::all();
        // $products = Produit::distinct()->get();
        $marks = marque::all();
        
        $produits = Produit::distinct()->get();
        return view('Frontend.Home',compact('categories','sub_categories' ,'produits','marks'));
    }

    public function dachboard()
    {
        $table = 'dachboard';

        return view('Backend.dachboard',compact('table'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
