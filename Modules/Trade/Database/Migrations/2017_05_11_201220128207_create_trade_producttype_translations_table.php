<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradeProductTypeTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade__producttype_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('producttype_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['producttype_id', 'locale']);
            $table->foreign('producttype_id')->references('id')->on('trade__producttypes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trade__producttype_translations', function (Blueprint $table) {
            $table->dropForeign(['producttype_id']);
        });
        Schema::dropIfExists('trade__producttype_translations');
    }
}
