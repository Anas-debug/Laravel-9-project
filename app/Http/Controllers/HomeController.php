<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        //Hardcoded data
        $allCategories = DB::table('categories')->get();

        return view('index', ['categories' => $allCategories]);
    }
}
