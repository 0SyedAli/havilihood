<?php

namespace App\Livewire\Front\Profile;

use App\Models\Education;
use App\Models\Experience;
use App\Models\ProfileInfo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;
use function Livewire\of;

class Profile extends Component
{
        use WithFileUploads;
    public $bio =   '';
    public $skills = [];
    public $salary;
    public $location;
    public $profile_image;
    public $banner_image;
    public $hobbies = [];
    public $interested = [];
    public $activity =[];

    public $edit = true;
    public $work_type;
    public $experience_level;
    public $total_experience;

    public $user;

    public function mount(User $user)
    {
        $this->user = $user;


//        dd($this->user);
        $profile_info = $this->user->profile_info;
        $this->bio = $profile_info?->bio;
        $this->skills = explode(', ', $profile_info?->skills);
        $this->salary = $profile_info?->salary;
        $this->experience_level = $profile_info?->experience_level;
        $this->work_type = $profile_info?->work_type;
        $this->total_experience = $profile_info?->total_experience;
        $this->hobbies = explode(', ', $profile_info?->hobbies);
        $this->interested = explode(', ', $profile_info?->interested);
        $this->activity = explode(', ',$profile_info?->activity) ;
    }


    public function add($title)
    {
        switch ($title){
            case 'hobbies';
                $this->hobbies[] = '';
                break;
            case 'interested';
                $this->interested[] = '';
                break;
            case 'activity';
                $this->activity[] = '';
                break;
            case 'skills';
                $this->skills[] = '';
                break;

        }
    }

     public function remove($key,$title)
     {
         switch ($title){
             case 'hobbies';
            unset($this->hobbies[$key]);
            break;
            case 'interested';
            unset($this->interested[$key]);
            break;
            case 'activity';
            unset($this->activity[$key]);
            break;
             case 'skills';
                 unset($this->skills[$key]);
                 break;

         }
     }

    public function editProfile()
    {
        $this->edit = false;

    }

    public function deleteExperience($id){
        Experience::destroy($id);
    }

    public function deleteEducation($id){
        Education::destroy($id);
    }




    public function saveProfile()
    {
            $user = Auth::user();
        $image_path =null ;
        if ( $this->profile_image){
            if (file_exists($user->profile_info?->profile_image)) {
                unlink(base_path($user->profile_info->profile_image) );
            }
            $image_path = 'storage/app/public/' . $this->profile_image->store('UserImages', 'public');
        }

        $banner_image =null ;
        if ( $this->banner_image){
            if (file_exists($user->profile_info?->banner_image)) {
                unlink(base_path($user->profile_info->image_path) );
            }
            $banner_image = 'storage/app/public/' . $this->banner_image->store('BannerImages', 'public');
        }

        ProfileInfo::updateOrCreate(['user_id' => Auth::id()],[
            'bio' => $this->bio,
            'skills' => implode(', ', $this->skills),
            'salary' => $this->salary,
            'location' => $this->location,
            'work_type' => $this->work_type,
            'experience_level' => $this->experience_level,
            'total_experience' => $this->total_experience,
            'profile_image' => $image_path ?? $user->profile_info->profile_image,
            'banner_image' => $banner_image,
            'hobbies' => implode(', ', $this->hobbies),
            'interested' => implode(', ', $this->interested),
            'activity' => implode(', ', $this->activity),

        ]);
        $this->edit = true;
    }

    #[On('dataUpdated')]
    public function render()
    {
        $user = $this->user;

        return view('livewire.front.profile.profile', compact('user',));
    }

    public function rendered()
    {
        $this->dispatch('rendered');
    }



}
