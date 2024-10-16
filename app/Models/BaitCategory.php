<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaitCategory extends Model
{
    protected $table = 'tb_iscas_categories';
    protected $fillable = ['nm_category'];

    public function baits()
    {
        return $this->hasMany(Bait::class, 'id_category');
    }
}
