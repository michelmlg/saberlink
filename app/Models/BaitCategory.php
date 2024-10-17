<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaitCategory extends Model
{
    protected $table = 'tb_bait_categories'; // Tabela renomeada conforme a migration
    protected $fillable = ['nm_category'];

    public function baits()
    {
        return $this->hasMany(Bait::class, 'id_category');
    }
}
