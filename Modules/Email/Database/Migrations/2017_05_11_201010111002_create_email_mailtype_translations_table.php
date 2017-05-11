<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailMailtypeTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email__mailtype_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('mailtype_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['mailtype_id', 'locale']);
            $table->foreign('mailtype_id')->references('id')->on('email__mailtypes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('email__mailtype_translations', function (Blueprint $table) {
            $table->dropForeign(['mailtype_id']);
        });
        Schema::dropIfExists('email__mailtype_translations');
    }
}
