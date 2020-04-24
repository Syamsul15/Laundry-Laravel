<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    protected $table = 'tb_outlet';
    protected $fillable = ['nama', 'alamat', 'tlp'];

    public function paket()
    {
    	return $this->hasMany('\App\Paket', 'id_outlet');
    }

    public function user()
    {
    	return $this->hasMany('\App\User', 'id_outlet');
    }
}
