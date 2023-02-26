<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service', function (Blueprint $table) {
            $table->id();
            $table->integer('main_content_id');
            $table->string('title_en');
            $table->string('title_my');
            $table->string('title_ja');
            $table->string('category_en');
            $table->string('category_my');
            $table->string('category_ja');
            $table->text('description_en');
            $table->text('description_my');
            $table->text('description_ja');
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
        Schema::dropIfExists('service');
    }
}
