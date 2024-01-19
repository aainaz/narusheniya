<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
   
    public function app_create(request $request){
        $request->validate([
            "description" => "required",
            "auto_number" => "required",
                           ], [
            "description.required" => "Поле обязательно для заполнения!",
            "auto_number.required" => "Поле обязательно для заполнения!",
                 ]);
                 $user_id = Auth::user()->id;
        $app_reg = $request->all();
        Application::create([
            "description"=> $app_reg["description"],
            "auto_number"=> $app_reg["auto_number"],
            "author"=> $user_id,
                  
        ]);
        return redirect("/cab")->with("success","");
    }
}
