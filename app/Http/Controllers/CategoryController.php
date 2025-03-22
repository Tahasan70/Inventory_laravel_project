<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categorypage(){
        return view('pages.dashboard.catagory-page');
    }
}
