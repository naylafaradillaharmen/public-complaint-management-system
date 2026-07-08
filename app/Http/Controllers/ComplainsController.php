<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Complains;
use App\Models\User;
use Illuminate\Http\Request;

class ComplainsController extends Controller
{
    public function indexComplains(){
        $complains = Complains::all();
        return view('Admin.complains.indexC', compact('complains'));
    }

    public function updateStatus(Request $request, $id){
        $complains = Complains::findOrFail($id);
        $complains->status = $request->status;
        $complains->update();
        return redirect()->back()->with('success', 'Berhasil Update Status Pengaduan');
    }
}
