<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
         $portofolios = Portofolio::all();
           return view('home', compact('portofolios'));
    }
}
