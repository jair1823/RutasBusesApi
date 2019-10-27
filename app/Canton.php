<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    protected $table = 'canton';
    protected $guarded=['id_canton'];
}
