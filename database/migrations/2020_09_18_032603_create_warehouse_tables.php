<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehouseTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        
        Schema::create('tranfers', function (Blueprint $table) {
            $table->id();
            $table->morphs('tranferable');
            $table->bigInteger('product_id');
            $table->bigInteger('quantity')->default(0);
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
        Schema::dropIfExists('warehouses');
        Schema::dropIfExists('tranfers');
        Schema::dropIfExists('products');
    }
}
