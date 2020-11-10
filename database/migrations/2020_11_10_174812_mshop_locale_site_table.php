<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MshopLocaleSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mshop_locale_site', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('siteid');
        $table->integer('code');
        $table->string('label');
        $table->string('config');
        $table->string('status');
        $table->string('editor');
        $table->string('mtime');
        $table->string('ctime');
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
