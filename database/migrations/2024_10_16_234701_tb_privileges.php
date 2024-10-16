<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_privileges', function (Blueprint $table) {
            $table->bigIncrements('id_privilege');
            $table->string('nm_privilege');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_privileges');
    }
};
