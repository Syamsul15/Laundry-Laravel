@extends('layouts.master')

	<title>Tambah Owner</title>

@section('content')

	<div class="row mt-lg-5">
		<div class="col-12">
			<h1>Tambah Owner</h1>
		</div>
	</div>
	<form action="/daftar-owner/create" method="POST">
	@csrf
		<div class="form-group row">
		    <label for="inputText1" class="col-sm-2 col-form-label">Nama</label>
		    <div class="col-sm-10">
		      	<input type="text" class="form-control bg-transparent text-white" id="inputText1" name="nama">
		    </div>
	  	</div>
		<div class="form-group row">
		    <label for="inputText2" class="col-sm-2 col-form-label">Username</label>
		    <div class="col-sm-10">
		      	<input type="text" class="form-control bg-transparent text-white" id="inputText2" name="username">
		    </div>
	  	</div>
		<div class="form-group row">
		    <label for="inputText3" class="col-sm-2 col-form-label">Password</label>
		    <div class="col-sm-10">
		      	<input type="password" class="form-control bg-transparent text-white" id="inputText3" name="password">
		    </div>
	  	</div>
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

		<input type="hidden" value="owner" name="role">

		<button type="submit" class="btn btn-outline-light float-right">Tambah Data</button>
	</form>

@endsection