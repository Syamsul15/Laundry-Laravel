<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table = 'tb_detail_transaksi';
    protected $fillable = ['id_transaksi', 'id_paket', 'qty', 'keterangan'];

    public function paket()
    {
        return $this->belongsTo('\App\Paket', 'id_paket');
    }

    public function member()
    {
        return $this->belongsTo('\App\Member', 'id_member');
    }

    public function transaksi()
    {
        return $this->belongsTo('\App\Transaksi', 'id_transaksi');
    }
}