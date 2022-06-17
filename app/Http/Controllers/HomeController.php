<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    //
    
    public function __construct(){

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


    public function index(){
        $title="Trang dashboard";
        return view('Dashboard.index', compact('title'));
    }
    public function ck4(){
        return view('Dashboard.ck4', compact('title'));
    }
}
