<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStateAndProvince extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('State_and_Provinces', function(Blueprint $table){
            $table->increments('State_Province_Code');
            $table->integer('Country_Code')->unsigned();
            //So now we had created the Foreign key. 
            //Keep in mind that first we need to create the column and after that
            //we can assign the foreign key to it :)
            //Now let's migrate it and see the view
            $table->foreign('Country_Code')->references('Country_Code')->on('Countries')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //I forgot to write this line for rollback :) in future. 
        Schema::dropIfExists('State_and_Provinces');
    }
}
