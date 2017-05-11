<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProspectsProspectStatusTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospects__prospectstatus_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('prospectstatus_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['prospectstatus_id', 'locale']);
            $table->foreign('prospectstatus_id')->references('id')->on('prospects__prospectstatuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prospects__prospectstatus_translations', function (Blueprint $table) {
            $table->dropForeign(['prospectstatus_id']);
        });
        Schema::dropIfExists('prospects__prospectstatus_translations');
    }
}
