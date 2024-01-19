<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function index(){
        return view("index");
    }
    public function reg(){
        return view("reg");
    }
    public function cab(){
        return view("cab");
    }
    public function app(){
        return view("app");
    }
    public function admin(){
        return view("admin");
    }
}
