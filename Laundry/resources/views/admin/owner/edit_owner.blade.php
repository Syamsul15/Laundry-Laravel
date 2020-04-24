@extends('layouts.master')

	<title>Edit Owner</title>

@section('content')

	<div class="row mt-lg-5">
		<div class="col-12">
			<h1>Edit Owner</h1>
		</div>
	</div>
	<form action="/daftar-owner/{{$owner->id}}/update" method="POST">
	@csrf
		<div class="form-group row">
		    <label for="inputText1" class="col-sm-2 col-form-label">Nama</label>
		    <div class="col-sm-10">
		      	<input type="text" class="form-control bg-transparent text-white" id="inputText1" name="nama" value="{{$owner->nama}}">
		    </div>
	  	</div>
		<div class="form-group row">
		    <label for="inputText2" class="col-sm-2 col-form-label">Username</label>
		    <div class="col-sm-10">
		      	<input type="text" class="form-control bg-transparent text-white" id="inputText2" name="username" value="{{$owner->username}}">
		    </div>
	  	</div>
		<div class="form-group row">
		    <label for="inputText3" class="col-sm-2 col-form-label">Password</label>
		    <div class="col-sm-10">
		      	<input type="password" class="form-control bg-transparent text-white" id="inputText3" name="password" name="{{$owner->username}}">
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

		<button type="submit" class="btn btn-outline-light float-right">Edit Data</button>
	</form>

@endsection