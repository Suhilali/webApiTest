<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("income_id");
            $table->string("number");
            $table->date('date');
            $table->date("last_change_date");
            $table->string("supplier_article");
            $table->string("tech_size");
            $table->unsignedBigInteger("barcode");
            $table->unsignedBigInteger("quantity");
            $table->unsignedInteger("total_price");
            $table->date('date_close');
            $table->string("warehouse_name");
            $table->unsignedInteger("nm_id");
            $table->string("status");
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
        Schema::dropIfExists('incomes');
    }
}
