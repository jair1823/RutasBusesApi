<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_log extends Model
{
    protected $table = 'company_log';
    protected $guarded=['id_company_log','id_company','id_user'];
}
