<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ComptablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptables', function(Blueprint $table){
            $table->increments('id');
            $table->string('comptable');

            $table->bigInteger('voyage_id')->unsigned();
            $table->foreign('voyage_id')->references('id')->on('voyages');
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
