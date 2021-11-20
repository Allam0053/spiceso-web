<?php

use Illuminate\Support\Facades\Route;

Route::name('user.')->middleware('auth:user')->group(function () {
});
