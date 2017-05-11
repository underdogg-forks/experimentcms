<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsLeadStatusTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads__leadstatus_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('leadstatus_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['leadstatus_id', 'locale']);
            $table->foreign('leadstatus_id')->references('id')->on('leads__leadstatuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leads__leadstatus_translations', function (Blueprint $table) {
            $table->dropForeign(['leadstatus_id']);
        });
        Schema::dropIfExists('leads__leadstatus_translations');
    }
}
