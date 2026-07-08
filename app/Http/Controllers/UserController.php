<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function indexUser(){
        $user = User::all();
        return view('Admin.dataUser.indexDU', compact('user'));
    }

    public function createUser(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|unique:users',
            'nik' => 'required|unique:users',
            'gender' => 'required',
            'role' => 'required',
            'password' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $filename = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/usersImages', $filename);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'nik' => $request->nik,
            'image' => $filename,
            'address' => $request->address,
            'gender' => $request->gender,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan !');
    }

    public function updateUser(Request $request){
        // dd($request);
        $user = User::findOrFail($request->id);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'phone' => 'required|unique:users,phone,'.$user->id,
            'nik' => 'required|unique:users,nik,'.$user->id,
            'gender' => 'required',
            'role' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'nik' => $request->nik,
            'address' => $request->address,
            'gender' => $request->gender,
            'role' => $request->role,
        ];

        // Kalau user ganti password
        if($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }

        // Kalau user upload
        if($request->hasFile('image')) {
            // Hapus foto lama kalau ada (gunakan Storage facade)
            if($user->image && Storage::disk('public')->exists(path: 'usersImages/' . $user->image)) {
                Storage::disk('public')->delete('usersImages/' . $user->image);
            }

            // Upload foto baru
            $filename = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/usersImages', $filename);
            $data['image'] = $filename;
        }

        $user->update(attributes: $data);
        return redirect()->route('user.admin')->with('success', 'Data ' . $request->name .
         ' Berhasil Diupdate !');
    }
    public function deleteUser(Request $request){
        $user = User::findOrFail($request->id);
        $user->delete();
        return redirect()->back()->with('Delete', "Data $request->name Berhasil Dihapus !");
    }
}
