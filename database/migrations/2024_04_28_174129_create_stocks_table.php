<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->date("last_change_date");
            $table->string("supplier_article");
            $table->string("tech_size");
            $table->unsignedBigInteger("barcode");
            $table->unsignedInteger("quantity");
            $table->boolean('is_supply');
            $table->boolean('is_realization');
            $table->unsignedInteger("quantity_full");
            $table->string("warehouse_name");
            $table->unsignedInteger("in_way_to_client");
            $table->unsignedInteger("in_way_from_client");
            $table->unsignedInteger("nm_id")->nullable();
            $table->string("subject");
            $table->string("category");
            $table->string("brand");
            $table->string("sc_code");
            $table->unsignedInteger("price");
            $table->unsignedInteger("discount");
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
        Schema::dropIfExists('stocks');
    }
}
