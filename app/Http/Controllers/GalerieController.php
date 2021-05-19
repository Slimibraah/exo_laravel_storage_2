<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalerieController extends Controller
{
    public function index(){
        $galeries = Galerie::all();
        return view("backoffice.galerie.all",compact("galeries"));
    }
    public function show($id){
        $data= Galerie::find($id);
        return view("backoffice.galerie.read", compact('data'));
    }
    public function destroy($id){
        $galerie = Galerie::find($id);
        Storage::disk("public")->delete("img/".$galerie->image);
        $galerie->delete();
        return redirect()->back();
   }
    public function edit($id){
        $galerie = Galerie::find($id);
        return view("backoffice.galerie.edit",compact("galerie"));
    }
    public function update($id, Request $request){
        $request->validate([
            "nom"=>"required",
            "image"=>"required",
            "description"=>"required"
        ]);
        $galerie = Galerie::find($id);
        $galerie->nom = $request->nom;
        $galerie->description = $request->description;
        Storage::disk("public")->delete("img/" . $galerie->image);
        $galerie->image = $request->file("image")->hashName();
        $galerie ->updated_at=now();
        $galerie->save();
        $request->file("image")->storePublicly("img","public");
        return redirect()->route("galerie")->with("message", "Vous avez bien modifié la galerie : " . $galerie->nom); 
       }

       public function create(){
        return view("backoffice.galerie.create");
    }

    public function store (Request $request)
    {
        $request->validate([
            "nom"=>"required",
            "image"=>"required",
            "description"=>"required"
        ]);
        $galerie = new galerie();
        $galerie->nom = $request->nom;
        $galerie->description = $request->description;
        $galerie->image = $request->file("image")->hashName();
        $galerie ->updated_at=now();
        $galerie->save();
        $request->file("image")->storePublicly("img","public");
        return redirect()->route("galerie")->with("message", "Vous avez bien créée un nouveau galerie : " . $galerie->nom); 

    }

    public function download($id)
    {
        $galerie = Galerie::find($id);
        return Storage::disk("public")->download('img/'.$galerie->image);
    }
}
