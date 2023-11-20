<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\SousCategorie;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view('back.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('back.categories.create');
    }

    public function store(Request $request)
    {
      /*  $request->validate([
            'nom' => 'required',
        ]);*/

        Categorie::create($request->all());

        return redirect()->route('categories.index')
            ->with('success', 'Categorie  mise à jour avec succès.');
    }

    public function edit(Categorie $categorie)
    {
        return view('back.categories.edit', compact('categorie'));
    }

    public function update(Request $request, Categorie $categorie)
    {
       

        $categorie->update($request->all());

        return Redirect::route('categories.index')
            ->with('success', 'Categorie  mise à jour avec succès');
    }

    public function show(Categorie $categorie)
    {
        return view('back.categories.show', compact('categorie'));
    }

    public function destroy(Categorie $categorie)
    {
        $sousCategories = SousCategorie::where('categorie_id',$categorie->id)->get();

        if ($sousCategories->isNotEmpty()) {
            $sousCategories->each(function ($sousCategorie) {
                $sousCategorie->delete();
            });
        }
        $categorie->delete();

        Session::flash('success', 'Categorie  mise à jour avec succès');

        return Redirect::route('categories.index');
    }
}
