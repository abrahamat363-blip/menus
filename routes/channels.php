<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

<<<<<<< HEAD
Broadcast::channel('App.User.{id}', function ($user, $id) {
=======
Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
>>>>>>> d2e81559bed91cfa69aa5464e60e1f2dd25bebf8
    return (int) $user->id === (int) $id;
});
