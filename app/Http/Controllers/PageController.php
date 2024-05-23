<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('page.home');
    }
    public function about_us(){
        return view('page.about_us');
    }
}
