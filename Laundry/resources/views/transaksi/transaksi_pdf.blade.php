<style type="text/css">
    * {
        font-family: Bahnschrift;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
</style>

<div class="row mt-lg-5">
    <div class="row mt-lg-5">
		<div class="col-8">
			<h1 style="font-family: "Bahnschrift";">LONDRY</h1>
		</div>
		<div class="col">
			<h3>Laporan Transaksi</h3>
		</div>
	</div>
    <div class="col-2 mt-n2">
        <h4 class="mt-2 float-right">
            @if(auth()->user()->role == 'kasir')
                Kasir : {{auth()->user()->nama}} - {{auth()->user()->outlet->nama}}</h4>
            @elseif(auth()->user()->role == 'owner')
                Owner : {{auth()->user()->nama}} - {{auth()->user()->outlet->nama}}</h4>
            @endif
    </div>
</div>
<table>
    <tr>
        <th>No</th>
        <th>Kode Invoice</th>
        <th>Member</th>
        <th>Tanggal</th>
        <th>Batas Waktu</th>
        <th>Tanggal Bayar</th>
        <th>Biaya Tambahan</th>
        <th>Diskon</th>
        <th>Pajak</th>
        <th>Status</th>
        <th>Pembayaran</th>
    </tr>
    @php $no=1 @endphp
    @foreach ($transaksi as $row)
    <tr>
        <td>{{$no++}}</td>
        <td>{{$row->kode_invoice}}</td>
        <td>{{$row->member->nama}}</td>
        <td>{{$row->tgl}}</td>
        <td>{{$row->batas_waktu}}</td>
        <td>{{$row->tgl_bayar}}</td>
        <td>
            @if($row->biaya_tambahan == null)
                <div class="text-center"> - </div>
            @else
                {{$row->biaya_tambahan}}
            @endif
        </td>
        <td>
            @if($row->diskon == null)
                <div class="text-center"> - </div>
            @else
                {{$row->diskon}}
            @endif
        </td>
        <td>
            @if($row->pajak == null)
                <div class="text-center"> - </div>
            @else
                {{$row->pajak}}
            @endif
        </td>
        <td>{{$row->status}}</td>
        <td>{{$row->dibayar}}</td>
    </tr>
    @endforeach
</table>    
