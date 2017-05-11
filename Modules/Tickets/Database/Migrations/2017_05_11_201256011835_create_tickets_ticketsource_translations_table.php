<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTicketSourceTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets__ticketsource_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('ticketsource_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['ticketsource_id', 'locale']);
            $table->foreign('ticketsource_id')->references('id')->on('tickets__ticketsources')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets__ticketsource_translations', function (Blueprint $table) {
            $table->dropForeign(['ticketsource_id']);
        });
        Schema::dropIfExists('tickets__ticketsource_translations');
    }
}
