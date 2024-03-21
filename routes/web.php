<?php

use App\Http\Controllers\Front\MainController;
use Illuminate\Support\Facades\Route;

Route::controller(MainController::class)->name('front.')->group(function () {
    Route::get('/', 'index')->name('index');
});
