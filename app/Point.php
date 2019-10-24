<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $table = 'point';
    protected $guarded=['id_point','id_route'];
}
