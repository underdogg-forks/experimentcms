<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTicketStatusTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets__ticketstatus_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('ticketstatus_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['ticketstatus_id', 'locale']);
            $table->foreign('ticketstatus_id')->references('id')->on('tickets__ticketstatuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets__ticketstatus_translations', function (Blueprint $table) {
            $table->dropForeign(['ticketstatus_id']);
        });
        Schema::dropIfExists('tickets__ticketstatus_translations');
    }
}
