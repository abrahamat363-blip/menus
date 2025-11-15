<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     *
<<<<<<< HEAD
     * @var array
     */
    protected $except = [
=======
     * @var array<int, string>
     */
    protected $except = [
        'current_password',
>>>>>>> d2e81559bed91cfa69aa5464e60e1f2dd25bebf8
        'password',
        'password_confirmation',
    ];
}
