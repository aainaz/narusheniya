<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_status(){
        $app= Application::all();
        return view("admin",compact("app"));
    }
    public function change_two($id){
        $aplication = Application::find($id);
        $aplication->status = 2;
        $aplication->save();
        return redirect("/admin");
    }
    public function change_three($id){
        $aplication = Application::find($id);
        $aplication->status = 3;
        $aplication->save();
        return redirect("/admin");
    }
}
