<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVessellesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vesselles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('shipping_id');
            $table->string('name')->unique();
            $table->foreign('shipping_id')->references('id')->on('shippings');
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
        Schema::dropIfExists('vesselles');
    }
}
