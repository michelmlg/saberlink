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
            $table->string('nm_title');
            $table->text('ds_bait');
            $table->text('txt_body');
            $table->string('img_path');
            $table->string('nm_slug');
            $table->timestamp('dt_creation')->useCurrent();
            $table->timestamps();

            $table->unsignedBigInteger('id_category');
            $table->unsignedBigInteger('id_user');

            // Foreign keys
            $table->foreign('id_category')->references('id_category')->on('tb_bait_categories')->onDelete('cascade');
            // Referenciando a coluna id da tabela users
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_baits');
    }
};
