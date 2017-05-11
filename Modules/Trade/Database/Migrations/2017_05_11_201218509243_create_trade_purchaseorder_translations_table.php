<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradePurchaseOrderTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade__purchaseorder_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('purchaseorder_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['purchaseorder_id', 'locale']);
            $table->foreign('purchaseorder_id')->references('id')->on('trade__purchaseorders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trade__purchaseorder_translations', function (Blueprint $table) {
            $table->dropForeign(['purchaseorder_id']);
        });
        Schema::dropIfExists('trade__purchaseorder_translations');
    }
}
