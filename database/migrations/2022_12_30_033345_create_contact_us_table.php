<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->integer('main_content_id');
            $table->string('title_en');
            $table->string('title_my');
            $table->string('title_ja');
            $table->text('address_en');
            $table->text('address_my');
            $table->text('address_ja');
            $table->string('phone_en');
            $table->string('phone_my');
            $table->string('phone_ja');
            $table->string('email_en');
            $table->string('email_my');
            $table->string('email_ja');
            $table->text('map_en');
            $table->text('map_my');
            $table->text('map_ja');
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
        Schema::dropIfExists('contact_us');
    }
}
