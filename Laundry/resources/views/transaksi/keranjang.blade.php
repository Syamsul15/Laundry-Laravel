@extends('layouts.master')

@section('content')

    <div class="row mt-lg-5">
        <div class="col-8">
            <h1>Keranjang</h1>
        </div>
        <div class="col-lg-3">
            <form action="/posttransaksi" method="POST">
            @csrf
                <select class="form-control bg-transparent text-white" id="exampleFormControlSelect1" name="id_member">
                    <option>Pilih Member</option>
                    @foreach($member as $row)
                        <option value="{{$row->id}}">{{$row->nama}}</option>
                    @endforeach
                </select>

                <input type="hidden" value="{{$row->id}}" name="id_paket">

        </div>
        <div class="col-1">
            <button type="submit" class="btn btn-outline-light">Pesan</button>
        
        </div>
    </div>
    <table class="table table-borderless table-transparant table-hover rounded mt-1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
            <th>Biaya Tambahan</th>
            <th>Diskon</th>
            <th>Pajak</th>
            <th>Aksi</th>
        </tr>
        @php $no=1 @endphp
        @foreach ($keranjang as $row)
        <tr>
            <td>{{$no++}}</td>
			<td>{{$row->paket->nama_paket}}</td>
            <td>{{$row->paket->harga}}</td>
            <td>{{$row->qty}}</td>
            <td>{{$row->keterangan}}</td>
            <td>
                <input type="number" class="form-control bg-transparent text-white" style="width: 160px;" placeholder="Optional" name="biaya_tambahan">
            </td>
            <td>
                <input type="number" class="form-control bg-transparent text-white" style="width: 160px;" placeholder="Optional" name="diskon">
            </td>
            <td>
                <input type="number" class="form-control bg-transparent text-white" style="width: 160px;" placeholder="Optional" name="pajak">
            </form>
            </td>
            <td>
                <a href="/keranjang/{{$row->id}}/edit" class="btn btn-outline-warning btn-sm" role="button">Edit</a>
                <a href="/keranjang/{{$row->id}}/delete" class="btn btn-outline-danger btn-sm" role="button">Delete</a>
            </td>
        </tr>
        @endforeach    
    
@endsection