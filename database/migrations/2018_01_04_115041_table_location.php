<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableLocation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('locations_id');
            $table->string('locations_user_agent', 256);
            $table->string('locations_ip' , 30);
            $table->string('locations_route' , 50);
            $table->string('locations_latitude', 100);
            $table->string('locations_longitude', 100);
            $table->string('locations_city' , 70);
            $table->string('locations_country' , 50);
            $table->string('locations_regionName' , 50);
            $table->string('locations_timezone' , 30);
            $table->string('locations_page_previous' , 50);
            $table->timestamp('locations_date_time');           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
