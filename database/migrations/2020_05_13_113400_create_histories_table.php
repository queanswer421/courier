<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('shipment_id')->unsigned();
            $table->foreign('shipment_id')->references('id')->on('shipments');
            $table->integer('pid');
            $table->dateTime('h1');
            $table->dateTime('h2');
            $table->dateTime('h3');
            $table->dateTime('h4');
            $table->dateTime('h5');
            $table->date('h6');
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
        Schema::dropIfExists('histories');
    }
}
