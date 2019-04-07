<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Cities', function(Blueprint $table){
            $table->uuid('City_ID')->primary(); 
            //This is also char 36 column
            //This time i have created Universal Unique Identification for a change to see
            //how it works. This is also a nice concept. 
            $table->string('City_Name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Again this is for rollback :)
        Schema::dropIfExists('Cities');
    }
}
