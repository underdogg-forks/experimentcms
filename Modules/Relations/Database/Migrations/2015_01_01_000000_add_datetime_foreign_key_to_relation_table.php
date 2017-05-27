<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDatetimeForeignKeyToRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE `relations__relations` ADD CONSTRAINT `fk_datetime_format_id` FOREIGN KEY (`datetime_format_id`) REFERENCES `lookup__date_time_formats`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;');
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
