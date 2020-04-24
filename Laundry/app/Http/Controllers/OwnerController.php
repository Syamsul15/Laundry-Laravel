<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
    	$owner = \App\User::where('role','=', 'owner')->paginate(7);
    	return view('admin.owner.daftar_owner', compact('owner'));
    }

    public function create()
    {
        $outlet = \App\Outlet::all();
        return view('admin.owner.tambah_owner', compact('outlet'));
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

        return redirect('/daftar-owner');
    }

    public function edit($id)
    {
    	$owner = \App\User::find($id);
        $outlet = \App\Outlet::all();
    	return view('admin.owner.edit_owner', compact('owner', 'outlet'));
    }

    public function update(Request $request, $id)
    {
    	$owner = \App\User::find($id);
    	$owner->update($request->all());
    	return redirect('/daftar-owner');
    }

    public function delete($id)
    {
    	$owner = \App\User::find($id);
    	$owner->delete();
    	return redirect('/daftar-owner');
    }
}
