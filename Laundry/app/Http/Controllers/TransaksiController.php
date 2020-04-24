<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Str;
use PDF;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = \App\Transaksi::where('id_outlet', '=', auth()->user()->id_outlet)
                                    ->where('id_user', '=', auth()->user()->id)
                                    ->paginate(7);
        return view('transaksi.transaksi', compact('transaksi'));
    }

    public function indexadmin()
    {
        $transaksi = \App\Transaksi::all();
        return view('transaksi.transaksi', compact('transaksi'));
    }

    public function indexowner()
    {
        $transaksi = \App\Transaksi::where('id_outlet', '=', auth()->user()->id_outlet)->get();
        return view('transaksi.transaksi', compact('transaksi'));
    }

    public function store(Request $request)
    {
        $transaksi =  new \App\Transaksi;
        $transaksi->id_outlet = auth()->user()->id_outlet;
        $transaksi->kode_invoice = Str::random(10);
        $transaksi->id_member = $request->id_member;
        $transaksi->tgl = date('d-m-Y');
        $transaksi->batas_waktu = date('d-m-Y', strtotime('+3 days', strtotime($transaksi->tgl)));
        $transaksi->biaya_tambahan = $request->biaya_tambahan;
        $transaksi->diskon = $request->diskon;
        $transaksi->pajak = $request->pajak;
        $transaksi->status = 'baru';
        $transaksi->dibayar = 'belum_dibayar'; 
        $transaksi->id_user = auth()->user()->id;
        $transaksi->save();
        
        return redirect('/transaksi');
    }

    public function tglbayar(Request $request, $id)
    {
        $transaksi = \App\Transaksi::where('id', $id);
        $transaksi->update([
                    'dibayar' => 'dibayar',
                    'tgl_bayar' => date('d-m-Y')
        ]);

        if(auth()->user()->role == 'admin')
        {
            return redirect('/transaksiadmin');
        }
        if(auth()->user()->role == 'kasir')
        {
            return redirect('/transaksi');
        }
    }

    public function biayatambahan(Request $request, $id)
    {
        $transaksi = \App\Transaksi::where('id', $id);
        $transaksi->update([
                    'biaya_tambahan' => $request->biaya_tambahan
        ]);

        return redirect('/transaksi');
    }

    public function pajak(Request $request, $id)
    {
        $transaksi = \App\Transaksi::where('id', $id);
        $transaksi->update([
                    'pajak' => $request->pajak
        ]);
    
        return redirect('/transaksi');
    }
    

    public function diskon(Request $request, $id)
    {
        $transaksi = \App\Transaksi::where('id', $id);
        $transaksi->update([
                    'diskon' => $request->diskon
        ]);

        return redirect('/transaksi');
    }

    public function proses(Request $request, $id)
    {
        $transaksi = \App\Transaksi::where('id', $id);
        $transaksi->update([
                    'status' => 'proses'
        ]);

        if(auth()->user()->role == 'admin')
        {
            return redirect('/transaksiadmin');
        }
        if(auth()->user()->role == 'kasir')
        {
            return redirect('/transaksi');
        }
    }

    public function selesai(Request $request, $id)
    {
        $transaksi = \App\Transaksi::where('id', $id);
        $transaksi->update([
                    'status' => 'selesai'
        ]);

        if(auth()->user()->role == 'admin')
        {
            return redirect('/transaksiadmin');
        }
        if(auth()->user()->role == 'kasir')
        {
            return redirect('/transaksi');
        }
    }

    public function diambil(Request $request, $id)
    {
        $transaksi = \App\Transaksi::where('id', $id);
        $transaksi->update([
                    'status' => 'diambil'
        ]);

        if(auth()->user()->role == 'admin')
        {
            return redirect('/transaksiadmin');
        }
        if(auth()->user()->role == 'kasir')
        {
            return redirect('/transaksi');
        }
    }

    public function generatepdf()
    {
        $transaksi = \App\Transaksi::where('id_outlet', '=', auth()->user()->id_outlet)->get();
        $pdf = PDF::loadview('transaksi.transaksi_pdf', ['transaksi' => $transaksi]);
        return $pdf->download('laporan-transaksi.pdf');
    }
}
