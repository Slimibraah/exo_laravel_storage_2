<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view("backoffice.user.all",compact("users"));
    }
    public function show($id){
        $data= User::find($id);
        return view("backoffice.user.read", compact('data'));
    }
    public function destroy($id){
        $user = User::find($id);
        Storage::disk("public")->delete("img/".$user->lien);
        $user->delete();
        return redirect()->back();
   }
    public function edit($id){
        $user = User::find($id);
        return view("backoffice.user.edit",compact("user"));
    }
    public function update($id, Request $request){
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "age"=>"required",
            "email"=>"required",
            "password"=>"required",
            "pdp"=>"required"
        ]);
        $user = User::find($id);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->password = $request->password;
        Storage::disk("public")->delete("img/" . $user->pdp);
        $user->pdp = $request->file("pdp")->hashName();
        $user ->updated_at=now();
        $user->save();
        $request->file("pdp")->storePublicly("img","public");
        return redirect()->route("user")->with("message", "Vous avez bien modifié la user : " . $user->nom); 
       }

       public function create(){
        return view("backoffice.user.create");
    }

    public function store (Request $request)
    {
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "age"=>"required",
            "email"=>"required",
            "password"=>"required",
            // "pdp"=>"required"
        ]);
        $user = new user();
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->pdp = $request->file("pdp")->hashName();
        $user ->updated_at=now();
        $user->save();
        $request->file("pdp")->storePublicly("img","public");
        return redirect()->route("user")->with("message", "Vous avez bien créée un nouveau user : " . $user->nom); 

    }

    public function download($id)
    {
        $user = User::find($id);
        return Storage::disk("public")->download('img/'.$user->pdp);
    }
}
