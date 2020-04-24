@extends('layouts.master')

	<title>Edit Outlet</title>

@section('content')

	<div class="row mt-lg-5">
		<div class="col-12">
			<h1>Edit Outlet</h1>
		</div>
	</div>
	<form action="/daftar-outlet/{{$outlet->id}}/update" method="POST">
	@csrf
		<div class="form-group row">
		    <label for="inputText1" class="col-sm-2 col-form-label">Nama Outlet</label>
		    <div class="col-sm-10">
		      	<input type="text" class="form-control bg-transparent text-white" id="inputText1" value="{{$outlet->nama}}" name="nama">
		    </div>
	  	</div>
		<div class="form-group row">
    		<label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Alamat Outlet</label>
    		<div class="col-sm-10">
    			<textarea class="form-control bg-transparent text-white" id="exampleFormControlTextarea1" rows="3" name="alamat">{{$outlet->alamat}}</textarea>
    		</div>
  		</div>
		<div class="form-group row">
		    <label for="inputText2" class="col-sm-2 col-form-label">No.Telepon</label>
		    <div class="col-sm-10">
		      	<input type="text" class="form-control bg-transparent text-white" id="inputText2" value="{{$outlet->tlp}}" name="tlp">
		    </div>
	  	</div>
		<button type="submit" class="btn btn-outline-light float-right">Update Data</button>
	</form>

@endsection