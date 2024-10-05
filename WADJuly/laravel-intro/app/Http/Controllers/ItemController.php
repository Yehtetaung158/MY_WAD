<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function calculate($x, $y)
    {
        return $x * $y;
    }
    public function profile($age = null)
    {
        return "Age is $age";
    }
}
