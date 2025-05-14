<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobSkill extends Model
{
    protected $guarded;

    public function job()
    {
        return $this->belongsTo(UserJob::class);
    }
}
