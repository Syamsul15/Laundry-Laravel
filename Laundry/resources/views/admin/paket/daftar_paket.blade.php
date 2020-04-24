@extends('layouts.master')

	<title>Daftar Paket</title>

@section('content')

	<div class="row mt-lg-5">
		<div class="col-8">
			<h1>Daftar Paket</h1>
		</div>
		<div class="col">
			<a href="/daftar-paket/tambah" class="btn btn-outline-light float-right" role="button">Tambah Paket</a>
		</div>
	</div>
	<table class="table table-borderless table-transparant table-hover rounded mt-1">
		<tr class="thead">
			<th>Nama Outlet</th>
			<th>Jenis</th>
			<th>Nama Paket</th>
			<th>Harga</th>
			<th>Aksi</th>
		</tr>
		@foreach($paket as $row)
		<tr>
			<td>{{$row->outlet->nama}}</td>
			<td>{{$row->jenis}}</td>
			<td>{{$row->nama_paket}}</td>
			<td>{{$row->harga}}</td>
			<td><a href="/daftar-paket/{{$row->id}}/edit" class="btn btn-outline-warning btn-sm" role="button">Edit</a>
				<a href="/daftar-paket/{{$row->id}}/delete" class="btn btn-outline-danger btn-sm" role="button">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
	<div class="float-right">
		{{$paket->links()}}
	</div>
@endsection