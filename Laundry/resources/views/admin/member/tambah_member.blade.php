@extends('layouts.master')

	<title>Tambah Member</title>

@section('content')

	<div class="row mt-lg-5">
		<div class="col-12">
			<h1>Tambah Member</h1>
		</div>
	</div>
	<form action="/registrasi-member/create" method="POST">
	@csrf
	  	<div class="form-group row">
		    <label for="inputText1" class="col-sm-2 col-form-label">Nama</label>
		    <div class="col-sm-10">
		      	<input type="text" class="form-control bg-transparent text-white" id="inputText1" name="nama">
		    </div>
	  	</div>
	  	<div class="form-group row">
    		<label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Alamat</label>
    		<div class="col-sm-10">
    			<textarea class="form-control bg-transparent transparent-white" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
    		</div>
  		</div>
	  	<fieldset class="form-group">
	    	<div class="row">
			    <legend class="col-form-label col-sm-2 pt-0 text-white">Jenis Kelamin</legend>
			      	<div class="col-sm-10">
			        	<div class="custom-control custom-radio">
			          		<input class="custom-control-input" type="radio" name="jenis_kelamin" id="l" value="L">
			          		<label class="custom-control-label" for="l">Laki-laki</label>
			        	</div>
			        	<div class="custom-control custom-radio">
			          		<input class="custom-control-input" type="radio" name="jenis_kelamin" id="p" value="P">
			          		<label class="custom-control-label" for="p">Perempuan</label>
			        	</div>
	        		</div>
	      	</div>
	    </fieldset>
	  	<div class="form-group row">
		    <label for="inputText2" class="col-sm-2 col-form-label">No.Telepon</label>
		    <div class="col-sm-10">
		      	<input type="text" class="form-control bg-transparent text-white" id="inputText2" name="tlp">
		    </div>
	  	</div>
		<button type="submit" class="btn btn-outline-light float-right">Tambah Data</button>
	</form>

@endsection