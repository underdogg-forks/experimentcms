<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Modules\Core\Http\Controllers\BasePublicController;
use Modules\Auth\Exceptions\InvalidOrExpiredResetCode;
use Modules\Auth\Exceptions\UserNotFoundException;
use Modules\Auth\Http\Requests\LoginRequest;
use Modules\Auth\Http\Requests\RegisterRequest;
use Modules\Auth\Http\Requests\ResetCompleteRequest;
use Modules\Auth\Http\Requests\ResetRequest;
use Modules\Auth\Services\UserRegistration;
use Modules\Auth\Services\UserResetter;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    use DispatchesJobs;

    public function __construct()
    {
        //parent::__construct();
    }

    public function getLogin()
    {
        //dd('yes');
        return view('auth::public.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $remember = (bool)$request->get('remember_me', false);

        $error = $this->auth->login($credentials, $remember);
        if (!$error) {
            return redirect()->intended()
                ->withSuccess(trans('auth::messages.successfully logged in'));
        }

        return redirect()->back()->withInput()->withError($error);
    }

    public function getRegister()
    {
        return view('auth::public.register');
    }

    public function postRegister(RegisterRequest $request)
    {
        app(UserRegistration::class)->register($request->all());

        return redirect()->route('register')
            ->withSuccess(trans('auth::messages.account created check email for activation'));
    }

    public function getLogout()
    {
        $this->auth->logout();

        return redirect()->route('login');
    }

    public function getActivate($userId, $code)
    {
        if ($this->auth->activate($userId, $code)) {
            return redirect()->route('login')
                ->withSuccess(trans('auth::messages.account activated you can now login'));
        }

        return redirect()->route('register')
            ->withError(trans('auth::messages.there was an error with the activation'));
    }

    public function getReset()
    {
        return view('auth::public.reset.begin');
    }

    public function postReset(ResetRequest $request)
    {
        try {
            app(UserResetter::class)->startReset($request->all());
        } catch (UserNotFoundException $e) {
            return redirect()->back()->withInput()
                ->withError(trans('auth::messages.no user found'));
        }

        return redirect()->route('reset')
            ->withSuccess(trans('auth::messages.check email to reset password'));
    }

    public function getResetComplete()
    {
        return view('auth::public.reset.complete');
    }

    public function postResetComplete($userId, $code, ResetCompleteRequest $request)
    {
        try {
            app(UserResetter::class)->finishReset(
                array_merge($request->all(), ['userId' => $userId, 'code' => $code])
            );
        } catch (UserNotFoundException $e) {
            return redirect()->back()->withInput()
                ->withError(trans('auth::messages.user no longer exists'));
        } catch (InvalidOrExpiredResetCode $e) {
            return redirect()->back()->withInput()
                ->withError(trans('auth::messages.invalid reset code'));
        }

        return redirect()->route('login')
            ->withSuccess(trans('auth::messages.password reset'));
    }
}
