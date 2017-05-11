<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradeProductCategoryTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade__productcategory_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('productcategory_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['productcategory_id', 'locale']);
            $table->foreign('productcategory_id')->references('id')->on('trade__productcategories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trade__productcategory_translations', function (Blueprint $table) {
            $table->dropForeign(['productcategory_id']);
        });
        Schema::dropIfExists('trade__productcategory_translations');
    }
}
