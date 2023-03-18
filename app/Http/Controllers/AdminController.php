<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use app\user;

class AdminController extends Controller
{
    public function index()
    {
        $data = user::where('role', 'admin')->get();

        return view('admin.user.index', compact('data'));
    }

    public function addUser(Request $r)
    {
        User::create([
            'name' => $r->name,
            'email' => $r->email,
            'password' => Hash::make($r['password']),
            'role' => $r->role,
        ]);

        return redirect()->back()->with('success', 'Berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_method','_token','submit');
        $user = User::find($id);

        if ($user->update($data)) {
            return redirect()->back()->with('success', 'Berhasil diedit');
        }else{
            return redirect()->back()->with('gagal', 'Gagal diedit');

        }
    }
    
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back()->with('success', 'Berhasil dihapus');
    }
}
