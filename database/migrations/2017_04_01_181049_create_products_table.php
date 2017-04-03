<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
           $table->increments('id');

           $table->string('name_br')->nullable();
           $table->string('name_en')->nullable();
           $table->string('name_es')->nullable();

            $table->string('image_br')->nullable();
            $table->string('image_en')->nullable();
            $table->string('image_es')->nullable();

            $table->string('advantages_br')->nullable();
            $table->string('advantages_en')->nullable();
            $table->string('advantages_es')->nullable();

            $table->string('characteristics_br')->nullable();
            $table->string('characteristics_en')->nullable();
            $table->string('characteristics_es')->nullable();

            $table->string('packing_br')->nullable();
            $table->string('packing_en')->nullable();
            $table->string('packing_es')->nullable();

            $table->integer('marketed');
            $table->integer('category_id');

            $table->foreign('category_id')->references('id')->on('categories');

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
    }
}
