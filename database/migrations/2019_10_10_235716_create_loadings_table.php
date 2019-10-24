<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loadings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('port_id');
            $table->string('port');
            $table->string('place');
            $table->string('country');
            $table->string('cluster');
            $table->string('route');
            $table->foreign('port_id')->references('id')->on('port_codes');
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
        Schema::dropIfExists('loadings');
    }
}
