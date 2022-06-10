<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    
    public function __construct(){

    }
    public function index(){
        $title="Trang chu";
        return view('Clients.index', compact('title'));
    }

    public function contact(){
        $title="Trang contact";
        return view('Clients.contact', compact('title'));
    }

    public function service(){
        $title="Trang dich vu";
        return view('Clients.services', compact('title'));
    }

    public function about(){
        $title="Trang about";
        return view('Clients.about', compact('title'));
    }
}
