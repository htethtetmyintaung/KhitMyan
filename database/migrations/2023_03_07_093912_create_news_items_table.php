<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_items', function (Blueprint $table) {
            $table->id();
            $table->integer('news_id');
            $table->string('title_en');
            $table->string('title_my');
            $table->string('title_ja');
            $table->text('description_en');
            $table->text('description_my');
            $table->text('description_ja');
            $table->string('creator_en');
            $table->string('creator_my');
            $table->string('creator_ja');
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
        Schema::dropIfExists('news_items');
    }
}
