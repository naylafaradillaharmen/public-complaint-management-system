<?php

namespace App\Http\Controllers;

use App\Models\Complains;
use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResponseController extends Controller
{
    public function indexResponse(){
        $response = Response::all();
        return view('Admin.response.indexR', compact('response'));
    }

    public function formResponse($complain_id){
        $komplen = Complains::find($complain_id);
        return view('Admin.response.tambahResponse', 
        compact('complain_id', 'komplen'));
    }

    public function createResponse(Request $request){
        $request->validate([
            'response' => 'required|string',
        ]);

        Response::create([
            'admin_id' => Auth::user()->id,
            'complain_id' => $request->complain_id,
            'response' => $request->response,
        ]);

        // Kalau sudah response, maka status nya diubah menjadi 'selesai' atau resolve
        $komplen = Complains::findOrFail($request->complain_id);
        $komplen->status = 'resolve';
        $komplen->save();

        return redirect()->route('index.response')
        ->with('success', 'Tanggapan berhasil ditambahkan.');
    }

    public function deleteResponse(Request $request){
        $respon = Response::findOrFail($request->id);
        $respon->delete();
        return redirect()->route('index.response')
        ->with('Delete', 'Tanggapan berhasil dihapus.');
    }

    public function updateResponse(Request $request){
        $request->validate([
            'response' => 'required|string',
        ]);
        $respon = Response::findOrFail($request->id);
        $respon->response = $request->response;
        $respon->update();

        return redirect()->route('index.response')
        ->with('success', 'Tanggapan berhasil diupdate.');
}
}