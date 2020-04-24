<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index_admin()
    {
    	$paket = \App\Paket::paginate(7);
    	return view('admin.paket.daftar_paket', compact('paket'));
    }

    public function index()
    {
        $paket = \App\Paket::where('id_outlet', '=', auth()->user()->id_outlet)->get();
    	return view('admin.paket.pilih_paket', compact('paket'));
    }

    public function create()
    {
        $outlet = \App\Outlet::all();
        return view('admin.paket.tambah_paket', compact('outlet'));
    }

    public function store(Request $request)
    {
    	\App\Paket::create($request->all());
    	return redirect('/daftar-paket');
    }

    public function edit($id)
    {
    	$paket = \App\Paket::find($id);
        $outlet = \App\Outlet::all();
    	return view('admin.paket.edit_paket', compact('paket', 'outlet'));
    }

    public function update(Request $request, $id)
    {
    	$paket = \App\Paket::find($id);
    	$paket->update($request->all());
    	return redirect('/daftar-paket');
    }

    public function delete($id)
    {
    	$paket = \App\Paket::find($id);
    	$paket->delete();
    	return redirect('/daftar-paket');
    }
}
