<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('enterprise',64);
            $table->string('description',64);
            $table->string('category',64);
            $table->string('islands',64);
            $table->string('uploadimage',64)->nullable();
            $table->string('uploadvideo',64)->nullable();
            $table->string('uploadLogo',64)->nullable();
            $table->string('username',64);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertisements');
    }
}
