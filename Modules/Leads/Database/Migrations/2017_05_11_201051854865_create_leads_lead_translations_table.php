<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsLeadTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads__lead_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('lead_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['lead_id', 'locale']);
            $table->foreign('lead_id')->references('id')->on('leads__leads')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leads__lead_translations', function (Blueprint $table) {
            $table->dropForeign(['lead_id']);
        });
        Schema::dropIfExists('leads__lead_translations');
    }
}
