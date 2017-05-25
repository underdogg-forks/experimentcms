<?php

namespace Modules\Auth\Events\Handlers;

use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Modules\Auth\Emails\ResetPasswordEmail;
use Modules\Auth\Events\UserHasBegunResetProcess;

class SendResetCodeEmail
{
    /**
     * @var Mailer
     */
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function handle(UserHasBegunResetProcess $event)
    {
        $this->mailer->to($event->user->email)->send(new ResetPasswordEmail($event->user, $event->code));
    }
}
