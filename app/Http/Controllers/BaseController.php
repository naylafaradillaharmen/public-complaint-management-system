<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function landing(){
        $kategori = Category::all();
        return view('landing.index', compact('kategori'));
    }
}
