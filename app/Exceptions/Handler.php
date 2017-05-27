<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
//use Modules\Auth\Contracts\Authentication;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Contracts\Container\Container;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        TokenMismatchException::class,
        ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
/*
        $debug = \Config::get('app.bugsnag_reporting');
        $debug = ($debug) ? 'true' : 'false';
        if ($debug == 'false') {
            Bugsnag::setBeforeNotifyFunction(function ($error) {
                return false;
            });
        } else {
            $version = \Config::get('app.version');
            Bugsnag::setAppVersion($version);
        }
*/


        parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        if (config('app.debug') === false) {
            return $this->handleExceptions($e);
        }

        if ($e instanceof TokenMismatchException) {
            return redirect()->back()
                ->withInput($request->except('password'))
                ->withErrors(trans('core::core.error token mismatch'));
        }

        switch ($e) {
            case $e instanceof \Illuminate\Http\Exception\HttpResponseException:
                return parent::render($request, $e);
            case $e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException:
                return response()->json(['message' => $e->getMessage(), 'code' => $e->getStatusCode()]);
            case $e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException:
                return response()->json(['message' => $e->getMessage(), 'code' => $e->getStatusCode()]);
            default:
                return $this->common($request, $e);
        }
        return parent::render($request, $e);
    }

    /**
     * Function to render 500 error page.
     *
     * @param type $request
     * @param type $e
     *
     * @return type mixed
     */
    public function render500($request, $e)
    {
        if (config('app.debug') == true) {
            return parent::render($request, $e);
        } elseif ($e instanceof ValidationException) {
            return parent::render($request, $e);
        }

        return  response()->view('errors.500');
        //return redirect()->route('error500', []);
    }

    /**
     * Function to render 404 error page.
     *
     * @param type $request
     * @param type $e
     *
     * @return type mixed
     */
    public function render404($request, $e)
    {
        $seg = $request->segments();
        if (in_array('api', $seg)) {
            return response()->json(['status' => '404']);
        }
        if (config('app.debug') == true) {
            if ($e->getStatusCode() == '404') {
                return redirect()->route('error404', []);
            }

            return parent::render($request, $e);
        }

        return redirect()->route('error404', []);
    }

    /**
     * Function to render database connection failed.
     *
     * @param type $request
     * @param type $e
     *
     * @return type mixed
     */
    public function renderDB($request, $e)
    {
        $seg = $request->segments();
        if (in_array('api', $seg)) {
            return response()->json(['status' => '404']);
        }
        if (config('app.debug') == true) {
            return parent::render($request, $e);
        }

        return redirect()->route('error404', []);
    }


    /**
     * Common finction to render both types of codes.
     *
     * @param type $request
     * @param type $e
     *
     * @return type mixed
     */
    public function common($request, $e)
    {
        switch ($e) {
            case $e instanceof HttpException:
                return $this->render404($request, $e);
            case $e instanceof NotFoundHttpException:
                return $this->render404($request, $e);
            case $e instanceof PDOException:
                if (strpos('1045', $e->getMessage()) == true) {
                    return $this->renderDB($request, $e);
                } else {
                    return $this->render500($request, $e);
                }
//            case $e instanceof ErrorException:
//                if($e->getMessage() == 'Breadcrumb not found with name "" ') {
//                    return $this->render404($request, $e);
//                } else {
//                    return parent::render($request, $e);
//                }
            default:
                return $this->render500($request, $e);
        }

        return parent::render($request, $e);
    }



    private function handleExceptions($e)
    {
        if ($e instanceof ModelNotFoundException) {
            return response()->view('errors.404', [], 404);
        }

        if ($e instanceof NotFoundHttpException) {
            return response()->view('errors.404', [], 404);
        }

        return response()->view('errors.500', [], 500);
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest('login');
    }



}
