<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var array<int, class-string|string>
>>>>>>> d2e81559bed91cfa69aa5464e60e1f2dd25bebf8
     */
    protected $middleware = [
        // \App\Http\Middleware\TrustHosts::class,
        \App\Http\Middleware\TrustProxies::class,
        \Fruitcake\Cors\HandleCors::class,
<<<<<<< HEAD
        \App\Http\Middleware\CheckForMaintenanceMode::class,
=======
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
>>>>>>> d2e81559bed91cfa69aa5464e60e1f2dd25bebf8
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var array<string, array<int, class-string|string>>
>>>>>>> d2e81559bed91cfa69aa5464e60e1f2dd25bebf8
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
<<<<<<< HEAD
            'throttle:60,1',
=======
            // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            'throttle:api',
>>>>>>> d2e81559bed91cfa69aa5464e60e1f2dd25bebf8
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var array<string, class-string|string>
>>>>>>> d2e81559bed91cfa69aa5464e60e1f2dd25bebf8
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
<<<<<<< HEAD
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
=======
>>>>>>> d2e81559bed91cfa69aa5464e60e1f2dd25bebf8
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
    ];
}
