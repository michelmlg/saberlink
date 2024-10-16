<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('id_privilege'); 

            
            $table->foreign('id_privilege')->references('id_privilege')->on('tb_privileges')->onDelete('cascade');
        }); 
    }

    public function down()
    {
        Schema::dropIfExists('tb_users');
    }
};
