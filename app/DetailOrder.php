<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transaksi;
use App\Food;

class DetailOrder extends Model
{
    protected $table = 'detail_order';
    protected $primaryKey = 'id_detail';
    protected $guarded = ['id_detail'];

    public function food()
    {
        return $this->hasOne('App\Food', 'id_makanan', 'id_makanan');
    }

    public function trasaction()
    {
        return $this->belongsTo('App\Transaksi');
    }
}
