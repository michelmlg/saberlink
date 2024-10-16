<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $table = 'tb_leads';
    protected $fillable = ['nm_leads', 'ds_email', 'ic_phone'];
}
