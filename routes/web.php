<?php

use App\Livewire\AboutUs;
use App\Livewire\Brands;
use App\Livewire\Contact;
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
use App\Livewire\Front\Dashboard\ApplicantPage;
use App\Livewire\Front\Dashboard\Candidates;
use App\Livewire\Front\Dashboard\CompanyDetail;
use App\Livewire\Front\Dashboard\JobPosted;
use App\Livewire\Front\Dashboard\Jobs;
use App\Livewire\Front\Dashboard\ProfilePref;
use App\Livewire\Front\Dashboard\RecruiterInfo;
use App\Livewire\Front\Dashboard\RecruitersPage;
use App\Livewire\Front\Dashboard\UploadJob\StepContainer;
use App\Livewire\Front\Profile\JobDetail;
use App\Livewire\Front\Profile\JobSuggestions;
use App\Livewire\Front\Profile\Profile;
use App\Livewire\Front\Profile\SavedJobs;
use App\Livewire\Home;
use App\Livewire\Join;
use App\Livewire\MemberPortal;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about-us', AboutUs::class)->name('about-us');
Route::get('/brands', Brands::class)->name('brands');
Route::get('/candidates', \App\Livewire\Candidates::class)->name('home-candidates');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/join', Join::class)->name('join');
Route::get('/member-portal', MemberPortal::class)->name('member-portal');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/forget-password', ForgetPassword::class)->name('forget.password');

Route::group( ['middleware' => 'auth:web'], function () {

        Route::get('/otp', Otp::class)->name('otp');

        Route::get('/personality-analysis', PersonalityAnalysis::class)->name('personality.analysis');
        Route::get('/profile-analyst', ProfileAnaylist::class)->name('profile.analyst');
        Route::get('/user-info', UserInfo::class)->name('user.info');
        Route::get('/upload-docs', UploadDocs::class)->name('upload.docs');
        Route::get('/employer-info', EmployerInfo::class)->name('employer.info');
        Route::get('/company-info', CompanyInfo::class)->name('company.info');

    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/jobs', Jobs::class)->name('jobs');
        Route::get('/profile-info', RecruiterInfo::class)->name('recruiter.info');
        Route::get('/upload-job', StepContainer::class)->name('upload.job');
        Route::get('/job-posted', JobPosted::class)->name('job.posted');
        Route::get('/profile-preference', ProfilePref::class)->name('profile.pref');
        Route::get('/company-detail', CompanyDetail::class)->name('company.detail');
        Route::get('/openings', Candidates::class)->name('candidates');
        Route::get('/applicants', ApplicantPage::class)->name('applicants');
        Route::get('/recruiters', RecruitersPage::class)->name('recruiters');

    });

    Route::get('/profile/{user:slug}', Profile::class)->name('profile');

    Route::group(['prefix' => 'talent', 'middleware' => 'role:candidate'], function () {
        Route::get('/saved-jobs', SavedJobs::class)->name('saved.jobs');
            Route::get('/directory', JobSuggestions::class)->name('job.suggestions');
            Route::get('/job-detail/{slug}', JobDetail::class)->name('job.detail');


    });
});

