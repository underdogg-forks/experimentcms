<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProspectsProspectTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospects__prospect_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('prospect_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['prospect_id', 'locale']);
            $table->foreign('prospect_id')->references('id')->on('prospects__prospects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prospects__prospect_translations', function (Blueprint $table) {
            $table->dropForeign(['prospect_id']);
        });
        Schema::dropIfExists('prospects__prospect_translations');
    }
}
