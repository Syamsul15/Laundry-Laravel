<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'tb_paket';
    protected $fillable = ['id_outlet', 'jenis', 'nama_paket', 'harga'];

    public function outlet()
    {
    	return $this->belongsTo('\App\Outlet', 'id_outlet');
    }

    public function keranjang()
    {
        return $this->hasMany('\App\Keranjang', 'id_paket');
    }
}
