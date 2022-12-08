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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('productname');
            $table->integer('categoryid')->unsigned();
            $table->text('description');
            $table->text('content')->nullable();
            $table->integer('qty');
            $table->integer('price');
            $table->string('size');
            $table->string('color');
            $table->string('sku')->unique();
            $table->boolean('feature');
            $table->boolean('status');
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
        Schema::dropIfExists('products');
    }
};
