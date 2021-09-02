<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('productcategory_id',false,true)->nullable();
            $table->string('image_url')->nullable();
            $table->string('title')->nullable();
            $table->string('price')->nullable();
            $table->text('caption')->nullable();
            $table->longtext('about')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('status')->default(1);  // user use
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
}
