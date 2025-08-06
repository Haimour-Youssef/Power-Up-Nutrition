<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
        public function recetteDet($permalien=null)
    {
        // dd($permalien);
        if ($permalien==null) {

            return view('front.pages.home');

        } else {
            $recette = Recette::where("title",$permalien)->first();
            // dd($recette);
            return view('recetteDetails', [
                'recette' => $recette
            ]);
        }
    }
    public function allRecettes()
    {
        $recettes = Recette::all();
        return view('recettes', compact('recettes'));
    }
}
