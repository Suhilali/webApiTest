<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("g_number");
            $table->date('date');
            $table->date("last_change_date");
            $table->string("supplier_article");
            $table->string("tech_size");
            $table->unsignedBigInteger("barcode");
            $table->unsignedInteger("total_price"); // цена товара без скидки
            $table->unsignedInteger("discount_percent");
            $table->string("warehouse_name");
            $table->string("oblast");
            $table->unsignedBigInteger("income_id");
            // $table->foreign("income_id")->references('id')->on('incomes')
            //       ->onUpdate('cascade')->onDelete('set null');
            $table->unsignedBigInteger("odid")->nullable();
            $table->unsignedBigInteger("nm_id");
            $table->string("subject");
            $table->string("category");
            $table->string("brand");
            $table->boolean("is_cancel");
            $table->string("cancel_dt")->nullable();
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
        Schema::dropIfExists('orders');
    }
}
