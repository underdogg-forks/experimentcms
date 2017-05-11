<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailMailboxTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email__mailbox_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('mailbox_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['mailbox_id', 'locale']);
            $table->foreign('mailbox_id')->references('id')->on('email__mailboxes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('email__mailbox_translations', function (Blueprint $table) {
            $table->dropForeign(['mailbox_id']);
        });
        Schema::dropIfExists('email__mailbox_translations');
    }
}
