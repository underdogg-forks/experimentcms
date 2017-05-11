<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTicketTypeTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets__tickettype_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('tickettype_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['tickettype_id', 'locale']);
            $table->foreign('tickettype_id')->references('id')->on('tickets__tickettypes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets__tickettype_translations', function (Blueprint $table) {
            $table->dropForeign(['tickettype_id']);
        });
        Schema::dropIfExists('tickets__tickettype_translations');
    }
}
