<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLookupForeignKeysToRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('relations__relations', function (Blueprint $table) {
            $table->foreign('timezone_id', 'fk_timezone_id')->references('id')->on('lookup__timezones');
            $table->foreign('date_format_id', 'fk_date_format_id')->references('id')->on('lookup__date_formats');
            $table->foreign('currency_id', 'fk_currency_id')->references('id')->on('lookup__currencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('relations__relations', function (Blueprint $table) {

        });
    }
}
