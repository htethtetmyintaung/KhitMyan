<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->integer('main_content_id');
            $table->string('image_title_en');
            $table->string('image_title_my');
            $table->string('image_title_ja');
            $table->text('image_description_en');
            $table->text('image_description_my');
            $table->text('image_description_ja');
            $table->string('title_en');
            $table->string('title_my');
            $table->string('title_ja');
            $table->text('sub_title_en');
            $table->text('sub_title_my');
            $table->text('sub_title_ja');
            $table->text('description_en');
            $table->text('description_my');
            $table->text('description_ja');
            $table->string('image');
            $table->integer('created_by');
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
        Schema::dropIfExists('about_us');
    }
}
