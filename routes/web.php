<?php

use App\Livewire\Front\Auth\Candidate\PersonalityAnalysis;
use App\Livewire\Front\Auth\Candidate\ProfileAnaylist;
use App\Livewire\Front\Auth\Candidate\UploadDocs;
use App\Livewire\Front\Auth\Candidate\UserInfo;
use App\Livewire\Front\Auth\ForgetPassword;
use App\Livewire\Front\Auth\Login;
use App\Livewire\Front\Auth\Otp;
use App\Livewire\Front\Auth\Recruiter\CompanyInfo;
use App\Livewire\Front\Auth\Recruiter\EmployerInfo;
use App\Livewire\Front\Auth\Register;
use App\Livewire\Front\Dashboard\Candidates;
use App\Livewire\Front\Dashboard\CompanyDetail;
use App\Livewire\Front\Dashboard\JobPosted;
use App\Livewire\Front\Dashboard\Jobs;
use App\Livewire\Front\Dashboard\ProfilePref;
use App\Livewire\Front\Dashboard\UploadJob\StepContainer;
use App\Livewire\Front\Profile\JobSuggestions;
use App\Livewire\Front\Profile\Profile;
use App\Livewire\Front\Profile\SavedJobs;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/forget-password', ForgetPassword::class)->name('forget.password');
Route::get('/user-info', UserInfo::class)->name('user.info');
Route::get('/employer-info', EmployerInfo::class)->name('employer.info');
Route::get('/personality-analysis', PersonalityAnalysis::class)->name('personality.analysis');
Route::get('/profile-anaylist', ProfileAnaylist::class)->name('profile.anaylist');
Route::get('/upload-docs', UploadDocs::class)->name('upload.docs');
Route::get('/company-info', CompanyInfo::class)->name('company.info');


Route::group( ['middleware' => 'auth:web'], function () {
    Route::get('/otp', Otp::class)->name('otp');

    Route::group(['prefix' => 'dashboard', 'middleware' => 'role:candidate'], function () {
        Route::get('/candidates', Candidates::class)->name('candidates');
        Route::get('/jobs', Jobs::class)->name('jobs');
        Route::get('/upload-job', StepContainer::class)->name('upload.job');
        Route::get('/job-posted', JobPosted::class)->name('job.posted');
        Route::get('/profile-preference', ProfilePref::class)->name('profile.pref');
        Route::get('/company-detail', CompanyDetail::class)->name('company.detail');

    });

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', Profile::class)->name('profile');
        Route::get('/job-suggestions', JobSuggestions::class)->name('job.suggestions');
        Route::get('/saved-jobs', SavedJobs::class)->name('saved.jobs');

    });
});

