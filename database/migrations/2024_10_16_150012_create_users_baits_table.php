<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_users_baits', function (Blueprint $table) {
            $table->foreignId('id_user')->constrained('tb_users');
            $table->foreignId('id_bait')->constrained('tb_baits');
            $table->string('nm_title');
            $table->text('ds_bait');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_users_baits');
    }
};
