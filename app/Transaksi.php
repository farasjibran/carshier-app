<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';
    protected $primaryKey = 'id_transaksi';

    public function detailorder()
    {
        return $this->hasMany('App\DetailOrder', 'id_transaksi', 'id_transaksi')->with('food');
    }
}
