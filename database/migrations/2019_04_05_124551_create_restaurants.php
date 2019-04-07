<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Okay now we create multiple fk in this table.
        Schema::create('Restaurants', function(Blueprint $table){
            $table->increments('Restaurant_ID');
            $table->char('Address_ID',36)->collation('utf8mb4_unicode_ci');
            $table->foreign('Address_ID')->references('Address_ID')->on('Addresses')->onDelete('cascade');
            $table->char('City_ID',36)->collation('utf8mb4_unicode_ci');;
            $table->foreign('City_ID')->references('City_ID')->on('Cities')->onDelete('cascade');
            $table->integer('Country_Code')->unsigned();
            $table->foreign('Country_Code')->references('Country_Code')->on('Countries')->onDelete('cascade');
            $table->integer('State_Province_Code')->unsigned();
            $table->foreign('State_Province_Code')->references('State_Province_Code')->on('State_and_Provinces')->onDelete('cascade');
            $table->boolean('No_Smoking_Area_YN');
            $table->float('Ranking_Number');
            $table->string('Restaurant_Name');
            $table->text('Restaurant_Description');
            $table->string('How_to_Get_There');
            $table->time('Opening_Hours');
            $table->string('Map_Filename');
            $table->string('Picture_Filename');
            $table->integer('Rates');
            $table->text('Other_Details');
            //Phew!! Its now done :)
            //Let's migrate it. 

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
        Schema::dropIfExists('Restaurants');
    }
}
