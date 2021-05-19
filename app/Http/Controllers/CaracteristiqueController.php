<?php

namespace App\Http\Controllers;

use App\Models\caracteristique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class caracteristiqueController extends Controller
{
    public function index(){
        $caracteristiques = caracteristique::all();
        return view("backoffice.caracteristique.all",compact("caracteristiques"));
    }
    public function show($id){
        $data= caracteristique::find($id);
        return view("backoffice.caracteristique.read", compact('data'));
    }
    public function destroy($id){
        $caracteristique = caracteristique::find($id);
        $caracteristique->delete();
   
        return redirect()->back();
   }
    public function edit($id){
        $caracteristique = caracteristique::find($id);
        return view("backoffice.caracteristique.edit",compact("caracteristique"));
    }
    public function update($id, Request $request){
        $request->validate([
            "icon"=>"required",
            "chiffre"=>"required",
            "nom"=>"required"
        ]);
        $caracteristique = caracteristique::find($id);
        $caracteristique->icon = $request->icon;
        $caracteristique->chiffre = $request->chiffre;
        $caracteristique->nom = $request->nom;
        $caracteristique ->updated_at=now();
        $caracteristique->save();
        return redirect()->route("caracteristique")->with("message", "Vous avez bien modifié la caracteristique : " . $caracteristique->nom); 
       }

       public function create(){
        return view("backoffice.caracteristique.create");
    }

    public function store (Request $request)
    {
        $request->validate([
            "icon"=>"required",
            "chiffre"=>"required",
            "nom"=>"required"
        ]);
        $caracteristique = new caracteristique();
        $caracteristique->icon = $request->icon;
        $caracteristique->chiffre = $request->chiffre;
        $caracteristique->nom = $request->nom;
        $caracteristique ->updated_at=now();
        $caracteristique->save();
        return redirect()->route("caracteristique")->with("message", "Vous avez bien créée un nouveau caracteristique : " . $caracteristique->nom); 

    }

  
}
