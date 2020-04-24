@extends('layouts.master')

@section('content')

    <div class="row mt-lg-5">
        <div class="col-12">
            <h1>Edit Keranjang</h1>
        </div>
    </div>
    <form action="/keranjang/{{$keranjang->id}}/update" method="POST">
    @csrf
        <div class="form-group row">
            <label for="inputText1" class="col-sm-2 col-form-label">Nama Paket</label>
            <div class="col-sm-10">
                <input type="text" class="form-control bg-dark text-white" id="inputText1" readonly value="{{$keranjang->paket->nama_paket}}" name="nama">
            </div>
        </div>
        <div class="form-group row">
		    <label for="inputText2" class="col-sm-2 col-form-label">Harga</label>
		    <div class="col-sm-10">
	            <input type="text" class="form-control bg-dark text-white" id="inputText2" name="harga" readonly value="{{$keranjang->paket->harga}}">
		    </div>
        </div>
        <div class="form-group row">
            <label for="replyNumber" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
                <input type="number" class="form-control bg-dark text-white" id="replyNumber" name="qty"  value="{{$keranjang->qty}}">
            </div>    
        </div>    
        <div class="form-group row">
		    <label for="inputText3" class="col-sm-2 col-form-label">Keterangan</label>
		    <div class="col-sm-10">
	            <input type="text" class="form-control bg-dark text-white" id="inputText3" readonly name="harga" value="{{$keranjang->keterangan}}">
		    </div>
        </div>
        <button type="submit" class="btn btn-outline-primary btn-sm float-right">Edit Data</button>
    </form>
    
@endsection