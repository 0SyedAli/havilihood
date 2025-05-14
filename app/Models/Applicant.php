<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $guarded;

    public function job()
    {
        return $this->belongsTo(UserJob::class,'user_job_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
