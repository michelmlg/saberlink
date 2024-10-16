<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_users', function (Blueprint $table) {
            $table->bigIncrements('id_user');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignId('id_privilege')->constrained(
                table: 'tb_privileges', indexName: 'id_privilege'
            );
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_users');
    }
};
