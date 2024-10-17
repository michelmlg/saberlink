<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_leads', function (Blueprint $table) {
            $table->bigIncrements('id_leads');
            $table->string('nm_leads');
            $table->string('ds_email')->unique();
            $table->string('ic_phone');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_leads');
    }
};
