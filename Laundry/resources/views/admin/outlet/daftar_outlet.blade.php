@extends('layouts.master')

	<title>Daftar Outlet</title>

@section('content')

	<div class="row mt-lg-5">
		<div class="col-8">
			<h1>Daftar Outlet</h1>
		</div>
		<div class="col">
			<a href="/daftar-outlet/tambah" class="btn btn-outline-light float-right" role="button">Tambah Outlet</a>
		</div>
	</div>
	<table class="table table-borderless table-transparant table-hover rounded mt-1">
		<tr class="thead">
			<th>Nama Outlet</th>
			<th>Alamat Outlet</th>
			<th>Telepon Outlet</th>
			<th>Aksi</th>
		</tr>
		@foreach($outlet as $row)
		<tr>
			<td>{{$row->nama}}</td>
			<td>{{$row->alamat}}</td>
			<td>{{$row->tlp}}</td>
			<td><a href="/daftar-outlet/{{$row->id}}/edit" class="btn btn-outline-warning btn-sm" role="button">Edit</a>
					<a href="/daftar-outlet/{{$row->id}}/delete" class="btn btn-outline-danger btn-sm" role="button">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection