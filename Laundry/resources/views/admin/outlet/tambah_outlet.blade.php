@extends('layouts.master')

	<title>Tambah Outlet</title>

@section('content')

	<div class="row mt-lg-5">
		<div class="col-12">
			<h1>Tambah Outlet</h1>
		</div>
	</div>
	<form action="/daftar-outlet/create" method="POST">
	@csrf
		<div class="form-group row">
		    <label for="inputText1" class="col-sm-2 col-form-label">Nama Outlet</label>
		    <div class="col-sm-10">
		      	<input type="text" class="form-control bg-transparent text-white" id="inputText1" name="nama">
		    </div>
	  	</div>
		<div class="form-group row">
    		<label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Alamat Outlet</label>
    		<div class="col-sm-10">
    			<textarea class="form-control bg-transparent text-white" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
    		</div>
  		</div>
		<div class="form-group row">
		    <label for="inputText2" class="col-sm-2 col-form-label">No.Telepon</label>
		    <div class="col-sm-10">
		      	<input type="text" class="form-control bg-transparent text-white" id="inputText2" name="tlp">
		    </div>
	  	</div>
		<button type="submit" class="btn btn-outline-light float-right">Tambah Data</button>
	</form>

@endsection