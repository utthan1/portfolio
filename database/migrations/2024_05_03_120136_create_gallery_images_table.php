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
        Schema::create('gallery_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('image_gallery_id');
            $table->foreign('image_gallery_id')->references('id')->on('image_galleries')->onDelete('cascade');
            $table->string('image_path'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('gallery_images');
    }
};
