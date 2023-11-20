<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\SousCategorie;
class FrontController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        $sousCategories = SousCategorie::all();
        
        return view('welcome', compact('categories', 'sousCategories'));
    }}
