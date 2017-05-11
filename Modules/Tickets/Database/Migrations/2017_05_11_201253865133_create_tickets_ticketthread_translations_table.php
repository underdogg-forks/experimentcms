<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTicketThreadTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets__ticketthread_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('ticketthread_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['ticketthread_id', 'locale']);
            $table->foreign('ticketthread_id')->references('id')->on('tickets__ticketthreads')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets__ticketthread_translations', function (Blueprint $table) {
            $table->dropForeign(['ticketthread_id']);
        });
        Schema::dropIfExists('tickets__ticketthread_translations');
    }
}
