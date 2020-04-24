@extends('layouts.master')

@section('content') 

<div class="row mt-lg-5">
    <div class="col-8">
        <h1>Transaksi</h1>
    </div>
    <div class="col-2 mt-n2">
        <h4 class="mt-2 float-right">
            @if(auth()->user()->role == 'kasir')
                Kasir : {{auth()->user()->nama}} - {{auth()->user()->outlet->nama}}</h4>
            @elseif(auth()->user()->role == 'owner')
                Owner : {{auth()->user()->nama}} - {{auth()->user()->outlet->nama}}</h4>
            @endif
    </div>
    <div class="col">
        <a href="/generatepdf" class="btn btn-outline-light">Generate Laporan</a>
    </div>
</div>
<table class="table table-borderless table-transparant table-hover rounded mt-1">
    <tr class="thead">
        <th>No</th>
        <th>Kode Invoice</th>
        <th>Member</th>
        <th>Tanggal</th>
        <th>Batas Waktu</th>
        <th>Tanggal Bayar</th>
        <th>Biaya Tambahan</th>
        <th>Diskon</th>
        <th>Pajak</th>
        <th>Status</th>
        <th>Pembayaran</th>
        @if(auth()->user()->role == 'kasir')
            <th>Konfirmasi Status</th>
        @endif
    </tr>
    @php $no=1 @endphp
    @foreach ($transaksi as $row)
    <tr>
        <td>{{$no++}}</td>
        <td>{{$row->kode_invoice}}</td>
        <td>{{$row->member->nama}}</td>
        <td>{{$row->tgl}}</td>
        <td>{{$row->batas_waktu}}</td>
        <td>
            @if(auth()->user()->role != 'owner')
                @if($row->tgl_bayar == null)
                    <form action="/transaksi/tglbayar/{{$row->id}}" method="POST">
                    @csrf
                        <button type="submit" class="btn btn-outline-light">Bayar</button>    
                    </form>
                @else
                    {{$row->tgl_bayar}}
                @endif
            @elseif(auth()->user()->role == 'owner')
                @if($row->tgl_bayar == null)
                    <div class="text-center"> - </div>
                @else
                    {{$row->tgl_bayar}}
                @endif
            @endif
        </td>
        <td>
            @if($row->biaya_tambahan == null)
                <div class="text-center"> - </div>
            @else
                {{$row->biaya_tambahan}}
            @endif
        </td>
        <td>
            @if($row->diskon == null)
                <div class="text-center"> - </div>
            @else
                {{$row->diskon}}
            @endif
        </td>
        <td>
            @if($row->pajak == null)
                <div class="text-center"> - </div>
            @else
                {{$row->pajak}}
            @endif
        </td>
        <td>{{$row->status}}</td>
        <td>{{$row->dibayar}}</td>
        <td>
            @if(auth()->user()->role == 'kasir')
                @if($row->status == 'baru')   
                    <form action="/konfirmasi/proses/{{$row->id}}" method="POST">
                    @csrf
                        <button type="submit" class="btn btn-outline-warning">Proses</button>
                    </form>            
                @elseif($row->status == 'proses')   
                    <form action="/konfirmasi/selesai/{{$row->id}}" method="POST">
                    @csrf
                        <button type="submit" class="btn btn-outline-success">Selesai</button>
                    </form>
                @elseif($row->status == 'selesai' && $row->dibayar == 'dibayar')   
                    <form action="/konfirmasi/diambil/{{$row->id}}" method="POST">
                    @csrf
                        <button type="submit" class="btn btn-outline-primary">Diambil</button>
                    </form>            
                @elseif($row->status == 'diambil')
                    <button disabled="disabled" class="btn btn-success">Sudah Diambil</button>
                @elseif($row->status == 'selesai' && $row->dibayar == 'belum_dibayar')  
                    <button disabled="disabled"class="btn btn-danger">Bayar Dulu</button>
                @endif
            @endif
        </td>
    </tr>
    @endforeach
</table>

@endsection