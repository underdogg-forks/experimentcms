<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDatetimeformatForeignKeyToRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('relations__relations', function (Blueprint $table) {
            $table->foreign('datetime_format_id', 'fk_datetimeformat')->references('id')->on('lookup__datetime_formats');
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
