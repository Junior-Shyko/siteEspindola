<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPriceSeasonAndAds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('immobiles', function (Blueprint $table) {
            $table->float('immobiles_price_season', 8, 2)->nullable();
            $table->string('immobiles_face' , 25)->default('Nenhum')->nulllable();
            $table->boolean('immobiles_electronic_door')->default(false)->nulllable();
            $table->boolean('immobiles_front_sea')->default(false)->nulllable();//frente para o mar
            $table->boolean('immobiles_sea_shore')->default(false)->nulllable();//beira mar
            $table->boolean('immobiles_wine_house')->default(false)->nulllable();//Adega
            $table->boolean('immobiles_elevator')->default(false)->nulllable();//elevador
            $table->boolean('immobiles_barbecue_grill')->default(false)->nulllable();//churrasqueira
            $table->boolean('immobiles_poll')->boolean(false)->nulllable();//piscina
            $table->boolean('immobiles_sports_court')->boolean(false)->nulllable();//Quadra Polo Esportiva
            $table->boolean('immobiles_soccer_field')->boolean(false)->nulllable();//Quadra Polo Esportiva
            $table->boolean('immobiles_furnished')->boolean(false)->nulllable();//Quadra Polo Esportiva            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('immobiles', function (Blueprint $table) {
            //
        });
    }
}
