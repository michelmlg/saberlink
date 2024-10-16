<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bait extends Model
{
    protected $table = 'tb_baits';
    protected $fillable = ['nm_title', 'ds_bait', 'id_category', 'txt_body', 'img_path', 'nm_slug', 'dt_creation'];

    public function category()
    {
        return $this->belongsTo(BaitCategory::class, 'id_category');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'tb_users_baits', 'id_bait', 'id_user')
                    ->withPivot('nm_title', 'ds_bait')
                    ->withTimestamps();
    }
}
