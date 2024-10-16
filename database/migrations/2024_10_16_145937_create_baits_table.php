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
            
            $table->primary('id_bait');

            
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_baits');
    }
};