<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLinkToMainContents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('main_contents', function (Blueprint $table) {
            $table->string('link_en');
            $table->string('link_my');
            $table->string('link_ja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('main_contents', function (Blueprint $table) {
            $table->dropColumn('link_en');
            $table->dropColumn('link_my');
            $table->dropColumn('link_ja');
        });
    }
}
