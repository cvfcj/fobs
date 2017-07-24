<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientusers', function (Blueprint $table) {
          //  $table->increments('id');
               $table->string('organization',64);
            $table->string('username',64);
            $table->string('password',64);
            $table->string('phonenumber',64);
            $table->string('country',64);
            $table->string('activation',64);
              $table->primary('username');
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
        Schema::dropIfExists('clientusers');
    }
}
