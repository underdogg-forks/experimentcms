<?php

use App\Model\MailJob\MailService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailSendTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_sendtypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('short_name');
            $table->timestamps();
        });

        $mail = new MailSendType();
        $services = ['smtp'=>'SMTP', 'mail'=>'Php Mail', 'sendmail'=>'Send Mail', 'mailgun'=>'Mailgun', 'mandrill'=>'Mandrill', 'log'=>'Log file'];
        foreach ($services as $key=>$value) {
            $mail->create([
            'name'      => $value,
            'short_name'=> $key,
        ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mail_sendtypes');
    }
}
