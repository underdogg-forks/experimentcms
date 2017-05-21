<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimelineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timeline', function (Blueprint $table) {
            $table->increments('id');


            $table->unsignedInteger('company_id');
            $table->unsignedInteger('relation_id');
            $table->unsignedInteger('staff_id');
            $table->unsignedInteger('contact_id')->nullable();
            $table->unsignedInteger('payment_id')->nullable();
            $table->unsignedInteger('invoice_id')->nullable();
            $table->unsignedInteger('credit_id')->nullable();

            $table->text('message')->nullable();

            $table->integer('timeline_type_id');


            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('relation_id')->references('id')->on('relations');

            $table->softdeletes();
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
        Schema::dropIfExists('timeline');
    }
}
