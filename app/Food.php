<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';

    protected $primaryKey = 'id_makanan';
}
