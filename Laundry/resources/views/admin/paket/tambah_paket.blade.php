@extends('layouts.master')

	<title>Tambah Paket</title>

@section('content')

	<div class="row mt-lg-5">
		<div class="col-12">
			<h1>Tambah Paket</h1>
		</div>
	</div>
	<form action="/daftar-paket/create" method="POST">
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
					<option value="kiloan">Kiloan</option>
					<option value="selimut">Selimut</option>
					<option value="bed_cover">Bed Cover</option>
					<option value="kaos">Kaos</option>
					<option value="lain">Lain</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
		    <label for="inputText1" class="col-sm-2 col-form-label">Nama Paket</label>
		    <div class="col-sm-10">
		      	<input type="text" class="form-control bg-transparent text-white" id="inputText1" name="nama_paket">
		    </div>
	  	</div>
		<div class="form-group row">
		    <label for="replyNumber" class="col-sm-2 col-form-label">Harga</label>
		    <div class="col-sm-10">
		      	<input type="number" class="form-control bg-transparent text-white" id="replyNumber" name="harga">
		    </div>
	  	</div>
		<button type="submit" class="btn btn-outline-light float-right">Tambah Data</button>
	</form>

@endsection