<?php

namespace App\Http\Controllers;

use App\Models\Complains;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{
    public function myComplains(){
        $complain = Complains::with('kate', 'response')->where('user_id', Auth::user()->id)->get();
        
        return view('landing.myComplains', compact('complain'));
    }

}
