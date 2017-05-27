<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailMailboxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailboxes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('company_id')->unsigned()->nullable()->index('mailcompany_id');
            $table->string('email_address');
            $table->string('email_name');
            $table->string('user_name');
            $table->string('password');

            $table->boolean('is_active');

            $table->boolean('fetching_status');
            $table->string('fetching_host');
            $table->string('fetching_port');
            $table->string('fetching_protocol');
            $table->string('fetching_encryption');
            $table->string('mailbox_protocol');

            $table->boolean('sending_status');
            $table->string('sending_host');
            $table->string('sending_port');
            $table->string('sending_protocol');
            $table->string('sending_encryption');

            $table->string('smtp_validate');
            $table->string('smtp_authentication');


            $table->boolean('auto_response');

            $table->boolean('delete_email');
            $table->boolean('do_nothing');
            $table->boolean('authentication');
            $table->boolean('header_spoofing');

            $table->integer('department_id')->unsigned()->nullable()->index('maildefaultdepartment');
            $table->integer('priority_id')->unsigned()->nullable()->index('maildefaultpriority');
            $table->integer('helptopic_id')->unsigned()->nullable()->index('maildefaulthelptopic');


            $table->string('internal_notes');
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
        Schema::dropIfExists('mailboxes');
    }
}
