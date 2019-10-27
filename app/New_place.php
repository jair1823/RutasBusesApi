<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class New_place extends Model
{
    protected $table = 'new_place';
    protected $guarded=['id_new_place','id_user'];
}
