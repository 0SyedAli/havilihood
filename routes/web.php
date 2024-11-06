<?php

use App\Livewire\Front\Auth\ForgetPassword;
use App\Livewire\Front\Auth\Login;
use App\Livewire\Front\Auth\Register;
use App\Livewire\Front\Dashboard\Candidates;
use App\Livewire\Front\Dashboard\JobPosted;
use App\Livewire\Front\Dashboard\Jobs;
use App\Livewire\Front\Dashboard\ProfilePref;
use App\Livewire\Front\Dashboard\UploadJob\StepContainer;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/forget-password', ForgetPassword::class)->name('forget.password');

Route::group( ['prefix'=>'dashboard'], function () {

    Route::get('/candidates', Candidates::class)->name('candidates');
    Route::get('/jobs', Jobs::class)->name('jobs');
    Route::get('/upload-job', StepContainer::class)->name('upload.job');
    Route::get('/job-posted', JobPosted::class)->name('job.posted');
    Route::get('/profile-preference', ProfilePref::class)->name('profile.pref');

});
Route::group( ['prefix'=>'dashboard'], function () {

});

Route::group( ['prefix'=>'candidate','as' => 'candidate.'], function () {
    Route::get('/login', Home::class);
});
