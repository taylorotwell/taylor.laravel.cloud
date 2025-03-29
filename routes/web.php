<?php

use App\Jobs\TestJob;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dispatch', function () {
    TestJob::dispatch();

    return 'OK';
});

Route::get('/auth', function () {
    $user = User::where('email', 'taylor@laravel.com')->first();

    if (! $user) {
        $user = new User;

        $user->name = 'Taylor Otwell';
        $user->email = 'taylor@laravel.com';
        $user->password = bcrypt('password');

        $user->save();
    }

    Auth::login($user);

    return redirect('/');
});
