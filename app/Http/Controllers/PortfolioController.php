<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::all();
        return view("backoffice.portfolio.all",compact("portfolios"));
    }
    public function show($id){
        $data= Portfolio::find($id);
        return view("backoffice.portfolio.read", compact('data'));
    }
    public function destroy($id){
        $portfolio = Portfolio::find($id);
        Storage::disk("public")->delete("img/".$portfolio->image);
        $portfolio->delete();
        return redirect()->back();
   }
    public function edit($id){
        $portfolio = Portfolio::find($id);
        return view("backoffice.portfolio.edit",compact("portfolio"));
    }
    public function update($id, Request $request){
        $request->validate([
            "nom"=>"required",
            "image"=>"required",
            "catégorie"=>"required",
            "description"=>"required"
        ]);
        $portfolio = Portfolio::find($id);
        $portfolio->nom = $request->nom;
        $portfolio->image = $request->image;
        $portfolio->catégorie = $request->catégorie;
        $portfolio->description = $request->description;
        Storage::disk("public")->delete("img/" . $portfolio->image);
        $portfolio->pdp = $request->file("image")->hashName();
        $portfolio ->updated_at=now();
        $portfolio->save();
        $request->file("image")->storePublicly("img","public");
        return redirect()->route("portfolio")->with("message", "Vous avez bien modifié la portfolio : " . $portfolio->nom); 
       }

       public function create(){
        return view("backoffice.portfolio.create");
    }

    public function store (Request $request)
    {
        $request->validate([
            "nom"=>"required",
            "image"=>"required",
            "catégorie"=>"required",
            "description"=>"required"
        ]);
        $portfolio = new portfolio();
        $portfolio->nom = $request->nom;
        $portfolio->image = $request->image;
        $portfolio->catégorie = $request->catégorie;
        $portfolio->description = $request->description;
        $portfolio->pdp = $request->file("image")->hashName();
        $portfolio ->updated_at=now();
        $portfolio->save();
        $request->file("image")->storePublicly("img","public");
        return redirect()->route("portfolio")->with("message", "Vous avez bien créée un nouveau portfolio : " . $portfolio->nom); 

    }

    public function download($id)
    {
        $portfolio = Portfolio::find($id);
        return Storage::disk("public")->download('img/'.$portfolio->image);
    }
}
