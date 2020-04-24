<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'tb_transaksi';
    protected $fillable = ['id_outlet', 'kode_invoice', 'id_member', 'tgl', 'batas_waktu', 'tgl_pesanan', 'biaya_tambahan', 'diskon', 'pajak', 'status', 'dibayar', 'id_user'];

    public function member()
    {
        return $this->belongsTo('\App\Member', 'id_member');
    }

    public function paket()
    {
        return $this->belongsTo('\App\Paket', 'id_paket');
    }

    public function keranjang()
    {
        return $this->hasMany('\App\Keranjang', 'id_transaksi');
    }
}
