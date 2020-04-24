<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keranjang = \App\Keranjang::where('id_user', '=', auth()->user()->id)->paginate(7);
        $member = \App\Member::all();
        return view('transaksi.keranjang', compact('keranjang', 'member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $keranjang = new \App\Keranjang;
        $keranjang->id_paket = $request->id_paket;
        $keranjang->qty = $request->qty;
        $keranjang->id_user = $request->id_user;
        $keranjang->keterangan = $request->keterangan;
        $keranjang->save();

        $transaksi = new \App\Transaksi;
        $transaksi->biaya_tambahan = $request->biaya_tambahan;
        $transaksi->diskon = $request->diskon;
        $transaksi->pajak = $request->pajak;
        $keranjang->save();

        return redirect('/keranjang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $keranjang = \App\Keranjang::find($id);
        return view('transaksi.edit_keranjang', compact('keranjang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $keranjang = \App\Keranjang::find($id);
        $keranjang->update($request->all());
        return redirect('/keranjang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $keranjang = \App\Keranjang::find($id);
        $keranjang->delete();
        return redirect('/keranjang');
    }
}