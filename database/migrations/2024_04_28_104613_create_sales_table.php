<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string("g_number");
            $table->date('date');
            $table->date("last_change_date");
            $table->string("supplier_article");
            $table->string("tech_size");
            $table->unsignedBigInteger("barcode");
            $table->unsignedInteger("total_price"); // цена товара без скидки
            $table->unsignedInteger("discount_percent");
            $table->boolean('is_supply');
            $table->boolean('is_realization');
            $table->unsignedInteger("promo_code_discount")->nullable();
            $table->string("warehouse_name");
            $table->string("country_name");
            $table->string("oblast_okrug_name");
            $table->string("region_name");
            $table->unsignedInteger("income_id");
            $table->string("sale_id");
            $table->unsignedInteger("odid")->nullable();
            $table->unsignedInteger("spp");
            $table->float("for_pay");
            $table->unsignedInteger("finished_price")->nullable();
            $table->unsignedInteger("price_with_disc")->nullable();
            $table->unsignedInteger("nm_id")->nullable();
            $table->string("subject");
            $table->string("category");
            $table->string("brand");
            $table->boolean('is_storno')->nullable();
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
        Schema::dropIfExists('sales');
    }
}
