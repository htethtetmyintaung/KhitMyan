<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vision', function (Blueprint $table) {
            $table->id();
            $table->integer('service_id');
            $table->string('title_en');
            $table->string('title_my');
            $table->string('title_ja');
            $table->string('subtitle_en');
            $table->string('subtitle_my');
            $table->string('subtitle_ja');
            $table->text('description_en');
            $table->text('description_my');
            $table->text('description_ja');
            $table->string('cover_image');
            $table->string('slide_image');
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
        Schema::dropIfExists('vision');
    }
}
