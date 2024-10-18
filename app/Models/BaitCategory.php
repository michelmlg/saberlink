<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaitCategory extends Model
{
    use HasFactory;

    // Especifique a tabela se o nome não seguir a convenção do Laravel
    protected $table = 'tb_bait_categories';

    // Defina os campos que podem ser preenchidos em massa
    protected $fillable = ['nm_category'];
}
