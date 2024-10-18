<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_baits', function (Blueprint $table) {
            $table->bigIncrements('id_bait');
            $table->string('nm_title'); // Título da isca
            $table->text('ds_bait');    // Descrição da isca
            $table->text('txt_body');   // Texto completo da isca
            $table->string('img_path'); // Caminho para a imagem
            $table->longText('file_base64')->nullable();  // Campo para armazenar arquivo em Base64, pode ser nulo
            $table->string('nm_slug')->unique(); // Slug único
            $table->timestamp('dt_creation')->useCurrent(); // Data de criação
            $table->timestamps();

            // Chaves estrangeiras
            $table->unsignedBigInteger('id_category'); // ID da categoria
            $table->unsignedBigInteger('id_user');     // ID do usuário

            // Relacionamentos de chave estrangeira
            $table->foreign('id_category')->references('id_category')->on('tb_bait_categories')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_baits');
    }
};
