<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var array<int, class-string<Throwable>>
>>>>>>> d2e81559bed91cfa69aa5464e60e1f2dd25bebf8
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
<<<<<<< HEAD
     * @var array
     */
    protected $dontFlash = [
=======
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
>>>>>>> d2e81559bed91cfa69aa5464e60e1f2dd25bebf8
        'password',
        'password_confirmation',
    ];

    /**
<<<<<<< HEAD
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
=======
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
>>>>>>> d2e81559bed91cfa69aa5464e60e1f2dd25bebf8
    }
}
