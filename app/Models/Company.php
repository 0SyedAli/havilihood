<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    protected $guarded;

    public function recruiters()
    {
        return $this->hasMany(Recruiter::class);
    }
   

//    public function recruiters()
//    {
//        return $this->belongsToMany(Req);
//    }

}
