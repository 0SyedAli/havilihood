<section class="auth_container">
    <livewire:front.auth.candidate.side-section />

    <div class="dash_right">
        <div class="dash_right_inner info prof_anay upload_docs">
            <div class="container">
                <h3>Upload your resume</h3>
                <form action="{{route('personality.analysis')}}" method="get" class="personality_anaylysis p-0">
                    <div class="profile-anaylist-item">
                        <img src="{{asset('public/front/assets/images/upload_img.png')}}" alt="">
                        <input type="file" name="" id="">
                    </div>
                    <label for="">File should be in PDF or WORD format and must not exceed 10MB file size. </label>
                    <div class="info_btn1">
                        <button class="btn1" role="button">
                            Continue
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
