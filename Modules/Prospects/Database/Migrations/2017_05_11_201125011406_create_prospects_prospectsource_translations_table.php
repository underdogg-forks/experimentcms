<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProspectsProspectSourceTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospects__prospectsource_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('prospectsource_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['prospectsource_id', 'locale']);
            $table->foreign('prospectsource_id')->references('id')->on('prospects__prospectsources')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prospects__prospectsource_translations', function (Blueprint $table) {
            $table->dropForeign(['prospectsource_id']);
        });
        Schema::dropIfExists('prospects__prospectsource_translations');
    }
}
