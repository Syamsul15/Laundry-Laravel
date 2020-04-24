@extends('layouts.master')

	<title>Daftar Member</title>

@section('content')
	
	<div class="row mt-lg-5">
		<div class="col-8">
			<h1>Daftar Member</h1>
		</div>
		<div class="col">
			<a href="/registrasi-member/tambah" class="btn btn-outline-light float-right" role="button">Tambah Member</a>
		</div>
	</div>
	<table class="table table-borderless table-transparant table-hover rounded mt-1">
		<tr class="thead">
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>No.Telepon</th>
			<th>Aksi</th>
		</tr>
		@foreach($member as $row)
		<tr>
			<td>{{$row->nama}}</td>
			<td>{{$row->alamat}}</td>
			<td>{{$row->jenis_kelamin}}</td>
			<td>{{$row->tlp}}</td>
			<td>
				<a href="/registrasi-member/{{$row->id}}/edit" class="btn btn-outline-warning btn-sm" role="button">Edit</a>
				<a href="/registrasi-member/{{$row->id}}/delete" class="btn btn-outline-danger btn-sm" role="button">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection