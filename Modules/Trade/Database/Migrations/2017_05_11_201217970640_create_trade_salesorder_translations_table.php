<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradeSalesOrderTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade__salesorder_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('salesorder_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['salesorder_id', 'locale']);
            $table->foreign('salesorder_id')->references('id')->on('trade__salesorders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trade__salesorder_translations', function (Blueprint $table) {
            $table->dropForeign(['salesorder_id']);
        });
        Schema::dropIfExists('trade__salesorder_translations');
    }
}
