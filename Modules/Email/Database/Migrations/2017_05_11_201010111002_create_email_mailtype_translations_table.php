<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailMailBoxTypeTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email__mailboxtype_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('mailboxtype_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['mailboxtype_id', 'locale']);
            $table->foreign('mailboxtype_id')->references('id')->on('email__mailboxtypes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('email__mailboxtype_translations', function (Blueprint $table) {
            $table->dropForeign(['mailboxtype_id']);
        });
        Schema::dropIfExists('email__mailboxtype_translations');
    }
}
