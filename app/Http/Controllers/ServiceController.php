<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view("backoffice.service.all",compact("services"));
    }
    public function show($id){
        $data= Service::find($id);
        return view("backoffice.service.read", compact('data'));
    }
    public function destroy($id){
        $service = Service::find($id);
        $service->delete();
        return redirect()->back();
   }
    public function edit($id){
        $service = Service::find($id);
        return view("backoffice.service.edit",compact("service"));
    }
    public function update($id, Request $request){
        $request->validate([
            "icon"=>"required",
            "titre"=>"required",
            "description"=>"required"
        ]);
        $service = Service::find($id);
        $service->icon = $request->icon;
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service ->updated_at=now();
        $service->save();
        return redirect()->route("service")->with("message", "Vous avez bien modifié la service : " . $service->nom); 
       }

       public function create(){
        return view("backoffice.service.create");
    }

    public function store (Request $request)
    {
        $request->validate([
            "icon"=>"required",
            "titre"=>"required",
            "description"=>"required"
        ]);
        $service = new service();
        $service->icon = $request->icon;
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service ->updated_at=now();
        $service->save();
        return redirect()->route("service")->with("message", "Vous avez bien créée un nouveau service : " . $service->nom); 

    }

    
}
