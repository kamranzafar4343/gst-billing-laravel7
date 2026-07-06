<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $name = "Kamran";
        $age = "22";

        return view("welcome", compact("name", "age"));
    }
}