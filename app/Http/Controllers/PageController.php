<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home/index');
    }
    public function shop()
    {
        return view('home/shop');
    }
    public function about()
    {
        return view('home/about');
    }
    public function contact()
    {
        return view('home/contact');
    }
    public function detail()
    {
        return view('home/detail');
    }
}
