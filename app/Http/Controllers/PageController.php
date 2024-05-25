<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $dsSP = Product::limit(8)->get();

        return view('page.home', compact(['dsSP']));
    }
    public function about_us(){
        return view('page.about_us');
    }
}
