<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function rushb(){

        $rushb = 'AK-57';
        return view('index', compact('rushb'));
    }

    public function rusha(){
        return view('featuss');
    }

    public function rushc(){
        $test = [
            [
                "name" => "dafuq",
                "age" => 22,
                "address" => "dunno"
            ],    
            [
                "name" => "dafuq",
                "age" => 52,
                "address" => "sahdasjdhsand"
            ],
            [
                "name" => "dafuq",
                "age" => 72,
                "address" => "asdsadw"
            ],
        ];
        return view('table', compact('test'));
    }


}
