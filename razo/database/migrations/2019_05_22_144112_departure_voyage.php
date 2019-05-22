<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DepartureVoyage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Shema::create('departure_voyage', function(Blueprint $table) {
            $table->increments('id');

            $table->bigInteger('departure_id')->unsigned();
            $table->foreign('departure_id')->references('id')->on('departures')->onDelete('cascade');

            $table->bigInteger('voyage_id')->unsigned();
            $table->foreign('voyage_id')->references('id')->on('voyages')->onDelete('cascade');

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
        //
    }
}
