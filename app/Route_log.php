<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route_log extends Model
{
    protected $table = 'route_log';
    protected $guarded=['id_route_log','id_route','id_user'];
}
