<?php

namespace Modules\Auth\Events\Handlers;

use Illuminate\Contracts\Mail\Mailer;
//use Modules\Auth\Contracts\Authentication;
use Modules\Auth\Events\UserHasRegistered;
use Modules\Auth\Emails\WelcomeEmail;

class SendRegistrationConfirmationEmail
{
    /**
     * @var AuthenticationRepository
     */
    private $auth;
    /**
     * @var Mailer
     */
    private $mail;

    public function __construct(Authentication $auth, Mailer $mail)
    {
        $this->auth = $auth;
        $this->mail = $mail;
    }

    public function handle(UserHasRegistered $event)
    {
        $user = $event->user;

        $activationCode = $this->auth->createActivation($user);

        $this->mail->to($user->email)->send(new WelcomeEmail($user, $activationCode));
    }
}
