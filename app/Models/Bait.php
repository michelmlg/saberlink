<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bait extends Model
{
    protected $table = 'tb_baits';
    protected $fillable = ['nm_title', 'ds_bait', 'id_category', 'txt_body', 'img_path', 'nm_slug', 'dt_creation'];

    // Uma isca pertence a um usuário
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user'); // Relacionamento N:1
    }

    public function category()
    {
        return $this->belongsTo(BaitCategory::class, 'id_category');
    }
}
