<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //Hardcoded data
        $allCategories = ['Category 1', 'Category 2', 'Category 3'];

        return view('index', ['categories' => $allCategories]);
    }
}
