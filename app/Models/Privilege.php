<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    protected $table = 'tb_privileges';
    protected $fillable = ['nm_privilege'];

    public function users()
    {
        return $this->hasMany(User::class, 'id_privilege');
    }
}
