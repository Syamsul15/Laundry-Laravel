@extends('layouts.master')

	<title>Edit Paket</title>

@section('content')

	<div class="row mt-lg-5">
		<div class="col-12">
			<h1>Edit Paket</h1>
		</div>
	</div>
	<form action="/daftar-paket/{{$paket->id}}/update" method="POST">
	@csrf
		<div class="form-group row">
		    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Pilih Outlet</label>
		    <div class="col-sm-10">
			    <select class="form-control bg-transparent text-white" id="exampleFormControlSelect1" name="id_outlet">
				    <option>Pilih Outlet</option>
				    @foreach($outlet as $row)
				    	<option value="{{$row->id}}">{{$row->nama}}</option>
				    @endforeach
			    </select>
			</div>
		</div>
		<div class="form-group row">
		    <label for="exampleFormControlSelect2" class="col-sm-2 col-form-label">Pilih Paket</label>
		    <div class="col-sm-10">
			    <select class="form-control bg-transparent text-white" id="exampleFormControlSelect2" name="jenis">
					<option value="kiloan" @if ($paket->jenis == 'kiloan') selected @endif>Kiloan</option>
					<option value="selimut" @if ($paket->jenis == 'selimut') selected @endif>Selimut</option>
					<option value="bed cover" @if ($paket->jenis == 'bed_cover') selected @endif>Bed Cover</option>
					<option value="kaos" @if ($paket->jenis == 'kaos') selected @endif>Kaos</option>
					<option value="lain" @if ($paket->jenis == 'lain') selected @endif>Lain</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
		    <label for="inputText1" class="col-sm-2 col-form-label">Nama Paket</label>
		    <div class="col-sm-10">
		      	<input type="text" class="form-control bg-transparent text-white" id="inputText1" name="nama_paket" value="{{$paket->nama_paket}}">
		    </div>
	  	</div>
		<div class="form-group row">
		    <label for="inputText2" class="col-sm-2 col-form-label">Harga</label>
		    <div class="col-sm-10">
		      	<input type="text" class="form-control bg-transparent text-white" id="inputText2" name="harga" value="{{$paket->harga}}">
		    </div>
	  	</div>
		<button type="submit" class="btn btn-outline-light float-right">Edit Data</button>
	</form>

@endsection