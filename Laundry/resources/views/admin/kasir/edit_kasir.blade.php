@extends('layouts.master')

	<title>Edit Kasir</title>

@section('content')

	<div class="row mt-lg-5">
		<div class="col-12">
			<h1>Edit Kasir</h1>
		</div>
	</div>
	<form action="/daftar-kasir/{{$kasir->id}}/update" method="POST">
	@csrf
		<div class="form-group row">
		    <label for="inputText1" class="col-sm-2 col-form-label">Nama</label>
		    <div class="col-sm-10">
		      	<input type="text" class="form-control bg-transparent text-white" id="inputText1" name="nama" value="{{$kasir->nama}}">
		    </div>
	  	</div>
		<div class="form-group row">
		    <label for="inputText2" class="col-sm-2 col-form-label">Username</label>
		    <div class="col-sm-10">
		      	<input type="text" class="form-control bg-transparent text-white" id="inputText2" name="username" value="{{$kasir->username}}">
		    </div>
	  	</div>
		<div class="form-group row">
		    <label for="inputText3" class="col-sm-2 col-form-label">Password</label>
		    <div class="col-sm-10">
		      	<input type="password" class="form-control bg-transparent text-white" id="inputText3" name="password" name="{{$kasir->username}}">
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

		<input type="hidden" value="kasir" name="role">

		<button type="submit" class="btn btn-outline-light float-right">Edit Data</button>
	</form>

@endsection