<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutletController extends Controller
{
    public function index()
    {
    	$outlet = \App\Outlet::paginate(7);
    	return view('admin.outlet.daftar_outlet', compact('outlet'));
    }

    public function create()
    {
        return view('admin.outlet.tambah_outlet');
    }

    public function store(Request $request)
    {
    	\App\Outlet::create($request->all());
    	return redirect('/daftar-outlet');
    }

    public function edit($id)
    {
    	$outlet = \App\Outlet::find($id);
    	return view('admin.outlet.edit_outlet', compact('outlet'));
    }

    public function update(Request $request, $id)
    {
    	$outlet = \App\Outlet::find($id);
    	$outlet->update($request->all());
    	return redirect('/daftar-outlet');
    }

    public function delete($id)
    {
    	$outlet = \App\Outlet::find($id);
    	$outlet->delete();
    	return redirect('/daftar-outlet');
    }
}
