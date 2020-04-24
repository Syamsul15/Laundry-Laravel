<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	$kasir = \App\User::where('role','=', 'kasir')->paginate(7);
    	return view('admin.kasir.daftar_kasir', compact('kasir'));
    }

    public function create()
    {
        $outlet = \App\Outlet::all();
        return view('admin.kasir.tambah_kasir', compact('outlet'));
    }

    public function store(Request $request)
    {
        $user = new \App\User;
        $user->nama = $request->nama;
        $user->username = $request->username;     
        $user->password = Hash::make($request->password);
        $user->id_outlet = $request->id_outlet;
        $user->role = $request->role;
        $user->save();     

        return redirect('/daftar-kasir');
    }

    public function edit($id)
    {
    	$kasir = \App\User::find($id);
        $outlet = \App\Outlet::all();
    	return view('admin.kasir.edit_kasir', compact('kasir', 'outlet'));
    }

    public function update(Request $request, $id)
    {
    	$kasir = \App\User::find($id);
    	$kasir->update($request->all());
    	return redirect('/daftar-kasir');
    }

    public function delete($id)
    {
    	$kasir = \App\User::find($id);
    	$kasir->delete();
    	return redirect('/daftar-kasir');
    }
}
