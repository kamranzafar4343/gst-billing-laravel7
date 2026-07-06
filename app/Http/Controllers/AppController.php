<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $name = "Kamran";
        $age = "22";

        #using compact
        // return view("welcome", compact("name", "age"));

        #usign associative array
          return view("welcome", 
          array(
            'name1' => $name,
             'age' => $age
            )
          );

    }
}