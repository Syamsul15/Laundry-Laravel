@extends('layouts.master')

	<title>Pilih Paket</title>

@section('content')
    
    <div class="row mt-lg-5">
        <div class="col-8">
            <h1>Pilih Paket</h1>
        </div>
        <div class="col">
        </div>
    </div>
    <table class="table table-borderless table-transparant table-hover rounded mt-1">
		<tr>
			<th>No</th>
			<th>Nama Paket</th>
			<th>Jenis</th>
			<th>Harga</th>
			<th>Outlet</th>
			<th>Jumlah</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</tr>
		@php $no=1 @endphp
		@foreach($paket as $row)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$row->nama_paket}}</td>
			<td>{{$row->jenis}}</td>
			<td>{{$row->harga}}</td>
			<td>{{$row->outlet->nama}}</td>
			<form action="/postkeranjang" method="POST">
			@csrf
				<input type="hidden" value="{{$row->id}}" name="id_paket">
				<td>
					<input type="number" class="form-control form-control-sm bg-transparent text-white" id="replyNumber" name="qty" placeholder="Masukkan Jumlah">
				</td>
				<td>
					<input type="text" class="form-control form-control-sm bg-transparent text-white" id="inputText1" name="keterangan" placeholder="Optional">
				</td>

				<input type="hidden" name="id_user" value="{{auth()->user()->id}}">

				<td>
					<button type="submit" class="btn btn-outline-light btn-sm">Pesan</button>
				</td>
			</form>
		</tr>
		@endforeach
	</table>

@endsection