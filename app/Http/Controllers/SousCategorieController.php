<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SousCategorie;
use App\Models\Categorie;


class SousCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $sousCategories = SousCategorie::all();
       $sousCategories = SousCategorie::with('categorie')->get();
        return view('back.sous_categories.index', compact('sousCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('back.sous_categories.create' , compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'nom.required' => 'Le champ nom est obligatoire.',
            'nom.max' => 'Le champ nom ne peut pas dépasser :max caractères.',
            'categorie_id.required' => 'Le champ catégorie est obligatoire.',
            'categorie_id.exists' => "La catégorie sélectionnée n'est pas valide.",
        ];
    
        $request->validate([
            'nom' => 'required|max:20',
            'categorie_id' => 'required|exists:categories,id',
        ], $messages);
    
        SousCategorie::create([
            'nom' => $request->input('nom'),
            'categorie_id' => $request->input('categorie_id'), 
        ]);
    
        return redirect()->route('sous_categories.index')->with('success', 'Sous-catégorie créée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sousCategorie = SousCategorie::findOrFail($id); 

        return view('back.sous_categories.show', compact('sousCategorie'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { //$sousCategorie = SousCategorie::findOrFail($id); 
        $sousCategorie = SousCategorie::with('categorie')->findOrFail($id);
        $categories = Categorie::all();
        return view('back.sous_categories.edit', compact('sousCategorie', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|max:100',
            'categorie_id' => 'required|exists:categories,id',

        ]);
    
        $sousCategorie = SousCategorie::findOrFail($id); // Récupérer la sous-catégorie par son ID
    
        $sousCategorie->update([
            'nom' => $request->input('nom'),
            'categorie_id' => $request->input('categorie_id'), 

        ]);
    
        return redirect()->route('sous_categories.index')->with('success', 'Sous-catégorie mise à jour avec succès');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sousCategorie = SousCategorie::findOrFail($id); 

        $sousCategorie->delete();
    
        return redirect()->route('sous_categories.index')->with('success', 'Sous-catégorie supprimée avec succès');

      
    }
}
