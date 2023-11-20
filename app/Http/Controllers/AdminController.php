<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\SousCategorie;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    /**
     * Show the application dashboard.

     */
    public function back()
    {
        if (Gate::denies('viewAdmin', Auth::user())) {
            return redirect('/')->with('error', "Vous n\'avez pas l'autorisation d'accéder à la partie admin.");
        }

        /* if (auth()->user() && auth()->user()->role != 'admin') {
            return redirect('/')->with('error', "Vous n\'avez pas l'autorisation d'accéder à la partie admin."); 
        }*/
        
        return view('back.dashboard');
    }

    public function front()
    {
        $categories = Categorie::all();
        $sousCategories = SousCategorie::all();
        return view('front.form', compact('categories', 'sousCategories'));
    }
}
