<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicebreaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicebreaks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id',false,true)->nullable();
            $table->string('title')->nullable();
            $table->string('icon')->nullable();
            $table->string('image_url')->nullable();
            $table->longtext('about')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('state')->default(1);
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
        Schema::dropIfExists('servicebreaks');
    }
}
