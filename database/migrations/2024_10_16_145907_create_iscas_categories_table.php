<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_iscas_categories', function (Blueprint $table) {
            $table->bigIncrements('id_category');
            $table->string('nm_category');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_iscas_categories');
    }
};
