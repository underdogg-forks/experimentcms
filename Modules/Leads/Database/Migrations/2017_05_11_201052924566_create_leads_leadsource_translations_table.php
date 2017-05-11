<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsLeadSourceTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads__leadsource_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('leadsource_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['leadsource_id', 'locale']);
            $table->foreign('leadsource_id')->references('id')->on('leads__leadsources')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leads__leadsource_translations', function (Blueprint $table) {
            $table->dropForeign(['leadsource_id']);
        });
        Schema::dropIfExists('leads__leadsource_translations');
    }
}
