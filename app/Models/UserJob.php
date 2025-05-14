<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UserJob extends Model
{
    use Sluggable;
    protected $guarded;



    public function applicants()
    {
        return $this->hasMany(Applicant::class);
    }

    public function has_applicant()
    {
        return $this->hasOne(Applicant::class)->where('user_id', auth()->id());
    }
    public function skills()
    {
        return $this->hasMany(JobSkill::class);
    }
    public function saved_job()
    {
        return $this->hasOne(SavedJob::class)->where('user_id', auth()->id());
    }
    public function saved_jobs()
    {
        return $this->hasMany(SavedJob::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($post) {
            $post->skills()->delete();
            $post->applicants()->delete();
            $post->applicants()->delete();
        });

        static::creating(function ($post) {
            $post->slug = static::generateUniqueSlug($post->title);
        });

        static::updating(function ($post) {
            if ($post->isDirty('title')) {
                $post->slug = static::generateUniqueSlug($post->title, $post->id);
            }
        });
    }

    protected static function generateUniqueSlug($title, $ignoreId = null)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $i = 1;

        while (static::where('slug', $slug)
            ->when($ignoreId, fn($query) => $query->where('id', '!=', $ignoreId))
            ->exists()) {
            $slug = $originalSlug . '-' . $i++;
        }

        return $slug;
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true // optional, generates new slug when title changes
            ]
        ];
    }
}
