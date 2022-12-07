<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_in_details', function (Blueprint $table) {
            $table->id();
            $table->integer('ProductId')->unsigned();
            $table->integer('InvoiceId')->unsigned();
            $table->integer('Stock');
            $table->integer('Price');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_in_details');
    }
};
