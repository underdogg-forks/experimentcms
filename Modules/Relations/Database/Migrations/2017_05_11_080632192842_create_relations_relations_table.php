<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationsRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relations__relations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->unsignedInteger('company_id')->nullable(false)->index('company_id');

            $table->string('relation_key')->unique();
            $table->string('company_name', 100)->nullable(false)->index('company_name');
            $table->string('slug', 100)->unique();

            $table->foreign('company_id')->references('id')->on('companies');


            $table->string('idnumber', 50)->nullable();
            $table->string('vatnumber', 50)->nullable();


            $table->unsignedInteger('language_id')->default(0);

            $table->unsignedInteger('timezone_id')->nullable();
            $table->unsignedInteger('date_format_id')->nullable();
            $table->unsignedInteger('datetime_format_id')->nullable();
            $table->unsignedInteger('currency_id')->default(0);

            $table->foreign('timezone_id')->references('id')->on('timezones');
            $table->foreign('date_format_id')->references('id')->on('date_formats');
            $table->foreign('datetime_format_id')->references('id')->on('datetime_formats');
            $table->foreign('currency_id')->references('id')->on('currencies');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relations__relations');
    }
}
