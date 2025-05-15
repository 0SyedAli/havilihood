<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'slug',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function applied_jobs()
    {
        return $this->hasMany(Applicant::class);
    }
    public function user_info()
    {
        return $this->hasOne(ProfileInfo::class);
    }
    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
    public function educations()
    {
        return $this->hasMany(Education::class);
    }
    public function recruiter_info()
    {
        return $this->hasOne(Recruiter::class);
    }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function candidate()
    {
        return $this->hasOne(Candidate::class);
    }

    public function company()
    {
        return $this->hasOne(Company::class);
    }
    public function profile_info()
    {
        return $this->hasOne(ProfileInfo::class);
    }
    public function jobs()
    {
        return $this->hasMany(UserJob::class)->latest();
    }
    public function order_package()
    {
        return $this->hasOne(OrderPackage::class)->latest();
    }
    public function saved_jobs(): BelongsToMany
    {
        return $this->belongsToMany(UserJob::class, SavedJob::class)->latest();
    }
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->slug = static::generateUniqueSlug($post->name);
        });

        static::updating(function ($post) {
            if ($post->isDirty('name')) {
                $post->slug = static::generateUniqueSlug($post->name, $post->id);
            }
        });
    }

    protected static function generateUniqueSlug($name, $ignoreId = null)
    {
        $slug = Str::slug($name);
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
