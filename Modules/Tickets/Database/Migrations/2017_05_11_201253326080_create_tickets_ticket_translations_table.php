<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTicketTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets__ticket_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('ticket_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['ticket_id', 'locale']);
            $table->foreign('ticket_id')->references('id')->on('tickets__tickets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets__ticket_translations', function (Blueprint $table) {
            $table->dropForeign(['ticket_id']);
        });
        Schema::dropIfExists('tickets__ticket_translations');
    }
}
