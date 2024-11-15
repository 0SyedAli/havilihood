<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('isCandidate')) {
    function isCandidate()
    {
        return Auth::check() && Auth::user()->role === 'candidate';
    }
}

if (!function_exists('isRecruiter')) {
    function isRecruiter()
    {
        return Auth::check() && Auth::user()->role === 'recruiter';
    }
}

if (!function_exists('isOwner')) {
    function isOwner()
    {
        return Auth::check() && Auth::user()->role === 'company_owner';
    }
}

