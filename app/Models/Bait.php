<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bait extends Model
{
    protected $table = 'tb_baits';

    // Inclui o novo campo 'file_base64' na lista de campos atribuíveis
    protected $fillable = [
        'nm_title', 
        'ds_bait', 
        'id_category', 
        'txt_body', 
        'img_path',    // Caminho para a imagem
        'file_base64', // Novo campo para armazenar arquivos em Base64
        'nm_slug', 
        'dt_creation'
    ];

    // Relacionamento com usuário
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user'); // Relacionamento N:1
    }

    // Relacionamento com categoria
    public function category()
    {
        return $this->belongsTo(BaitCategory::class, 'id_category');
    }
}
