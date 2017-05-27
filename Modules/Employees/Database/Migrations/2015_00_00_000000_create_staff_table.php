<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('company_id')->nullable(false)->index('company_id');
            $table->string('firstname', 50);
            $table->string('lastname', 50);

            $table->boolean('is_active')->default(1);
            $table->string('phonenumber', 30)->nullable();
            $table->string('email', 100);
            $table->string('facebook', 100)->nullable();
            $table->string('linkedin', 100)->nullable();
            $table->string('skype', 50)->nullable();

            $table->string('profile_image')->nullable();
            $table->string('last_ip', 40)->nullable();
            $table->dateTime('last_login')->nullable();
            $table->dateTime('last_password_change')->nullable();
            $table->string('new_pass_key', 32)->nullable();
            $table->dateTime('new_pass_key_requested')->nullable();

            $table->foreign('company_id')->references('id')->on('companies');
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
        Schema::dropIfExists('staff');
    }

}
