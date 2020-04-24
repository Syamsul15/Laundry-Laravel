<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'tb_member';
    protected $fillable = ['nama', 'alamat', 'jenis_kelamin', 'tlp'];

    public function keranjang()
    {
        return $this->hasMany('\App\Keranjang', 'id_member');
    }
}
