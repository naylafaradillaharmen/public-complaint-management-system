<?php

namespace App\Http\Controllers;

use App\Models\Complain; // Ubah ke singular
use App\Models\Complains;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FrontController extends Controller
{
    public function indexFront(){
    $pending = Complains::where('status', 'pending')->count();
    $resolve = Complains::where('status', 'resolve')->count();
    $rejected = Complains::where('status', operator: 'rejected')->count();
    $user = User::where('role', 'user')->count();
    
    Log::info('Dashboard Stats:', [
        'pending' => $pending,
        'resolve' => $resolve,
        'rejected' => $rejected,
        'user' => $user
    ]);
    
    return view('Admin.index', compact('pending', 'resolve', 'rejected', 'user'));
}
}