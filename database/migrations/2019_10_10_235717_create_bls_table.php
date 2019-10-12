<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('loading_id');
            $table->unsignedBigInteger('vesselle_id');
            $table->string('number')->unique();
            $table->dateTime('arrival_date');
            $table->string('cargo_type');
            $table->string('shipper');
            $table->string('order');
            $table->string('commodity');
            $table->integer('number_of_20');
            $table->string('container_20');
            $table->string('container_40');
            $table->string('country');
            $table->string('city');
            $table->foreign('loading_id')->references('id')->on('loadings');
            $table->foreign('vesselle_id')->references('id')->on('vesselles');
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
        Schema::dropIfExists('bls');
    }
}
