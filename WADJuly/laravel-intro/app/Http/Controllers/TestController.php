<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // public function test()
    // {
    //     $name="Ye Htet Aung";
    //     $age=22;
    //     $carrer="Developer";
    //     return view('test',compact('name','age','carrer'));
    // }

    // public function test()
    // {
    //     $name = "Ye Htet Aung";
    //     $age = 22;
    //     $carrer = "Developer";
    //     return view('test')->with(['name' => $name, 'age' => $age, 'carrer' => $carrer]);
    // }

    // public function test()
    // {
    //     $data = [
    //         'name' => "Ye Htet Aung",
    //         'age' => 22,
    //         'career' => "Developer"
    //     ];
    //     return view('test', ['data' => $data]);
    // }

    // public function test()
    // {
    //     $htmlString="<p>I am htmlString</p>";
    //     return view('test',compact('htmlString'));
    // }

    // public function test()
    // {
    //     $names = [
    //         "Ma Ma","Kyaw Kyaw","Aung Aung","Zaw Zaw"
    //     ];
    //     return view('test', ['names' => $names]);
    // }

    public function test()
    {
        $age = 35;
        return view('test', compact('age'));
    }
}
