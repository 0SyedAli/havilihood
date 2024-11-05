<?php

use App\Livewire\Front\Auth\Login;
use App\Livewire\Front\Auth\Register;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::group( ['prefix'=>'candidate','as' => 'candidate.'], function () {

    Route::get('/login', Home::class);

}

);
