<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PHPUnit\Util\PHP\Job;

class SavedJob extends Model
{
    protected $guarded;

    public function job()
    {
        $this->belongsTo(UserJob::class);
    }
    public function user()
    {
        $this->belongsTo(User::class);
    }

}
