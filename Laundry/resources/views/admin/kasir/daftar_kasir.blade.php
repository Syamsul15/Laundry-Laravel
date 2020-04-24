@extends('.layouts.master')

	<title>Daftar Kasir</title>

@section('content')

	<div class="row mt-lg-5">
		<div class="col-8">
			<h1>Daftar Kasir</h1>
		</div>
		<div class="col">
			<a href="/daftar-kasir/tambah" class="btn btn-outline-light float-right" role="button">Tambah Kasir</a>
		</div>
	</div>
	<table class="table table-borderless table-transparant table-hover rounded mt-1">
		<tr class="thead">
			<th>Nama</th>
			<th>Username</th>
			<th>Nama Outlet</th>
			<th>Aksi</th>
		</tr>
		@foreach($kasir as $row)
		<tr>
			<td>{{$row->nama}}</td>
			<td>{{$row->username}}</td>
			<td>{{$row->outlet->nama}}</td>
			<td>
				<a href="/daftar-kasir/{{$row->id}}/edit" class="btn btn-outline-warning btn-sm" role="button">Edit</a>
				<a href="/daftar-kasir/{{$row->id}}/delete" class="btn btn-outline-danger btn-sm" role="button">Delete</a>
				</td>
		</tr>
		@endforeach
	</table>
@endsection