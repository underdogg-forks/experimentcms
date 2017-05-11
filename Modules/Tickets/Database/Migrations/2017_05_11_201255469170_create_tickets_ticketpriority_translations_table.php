<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTicketPriorityTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets__ticketpriority_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('ticketpriority_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['ticketpriority_id', 'locale']);
            $table->foreign('ticketpriority_id')->references('id')->on('tickets__ticketpriorities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets__ticketpriority_translations', function (Blueprint $table) {
            $table->dropForeign(['ticketpriority_id']);
        });
        Schema::dropIfExists('tickets__ticketpriority_translations');
    }
}
