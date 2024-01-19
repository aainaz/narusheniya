<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function reg(request $request){
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:6",
            "login" => "required|unique:users",
            "surname" => "required",
            "name" => "required",
            "patronymic" => "required",
            "telephone" => "required",
                ], [
            "email.required" => "Поля обязательно для заполнения!",
            "email.email" => "Введите корректный email!",
            "password.required" => "Поле обязательно для заполнения!",
            "login.required" => "Поле обязательно для заполнения!",
            "surname.required" => "Поле обязательно для заполнения!",
            "name.required" => "Поле обязательно для заполнения!",
            "patronymic.required" => "Поле обязательно для заполнения!",
            "telephone.required" => "Поле обязательно для заполнения!",
        ]);
        $user_reg = $request->all();
        User::create([
            "name"=> $user_reg["name"],
            "email"=> $user_reg["email"],
            "login"=> $user_reg["login"],
            "surname"=> $user_reg["surname"],
            "patronymic"=> $user_reg["patronymic"],
            "telephone"=> $user_reg["telephone"],
            "password"=> Hash::make($user_reg["password"]),

        ]);
        return redirect("/index")->with("success","");
    }
    public function log(Request $request){
        $request->validate([
                        "password" => "required",
            "login" => "required",
                            ], [
                       "password.required" => "Поле обязательно для заполнения!",
            "login.required" => "Поле обязательно для заполнения!",
                ]);
        $user_log = $request->only("login","password");
        if(Auth::attempt($user_log)){
            return redirect("/cab");
}return redirect("/log")->back()->with("error","");
}
public function logout(){
    Session::flush();
    Auth::logout();
    return redirect("/index")->with("success","");
}


// public function info(){
//     $user_info= User::all();
//     return view("/cab",["user_info"=> $user_info]);
// }


public function getApp(){
    $user = auth()->user();
    $app = Application::where('author', $user->id)->paginate(3);

    return view('cab', ['app' => $app]);

}
public function getUserApp(Request $request)
{
   
    
    $sort = $request->query('sort'); 

    if ($sort == 'asc') {
        $app = Application::orderBy('id', 'asc')->paginate(3);
    } else {
        $app = Application::orderBy('id', 'desc')->paginate(3);
    }
    return view("cab", ["app" => $app,"app" => $app,]);
}
}