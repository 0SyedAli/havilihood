<section class="auth_container">
    <livewire:front.auth.candidate.side-section />
    <div class="dash_right">
        <div class="dash_right_inner info">
            <h2>Personality Analysis Section</h2>
            <p>Select Option</p>
            <form action="javascript:;">
                <div>
                    <label for="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam?</label>
                    <div class="info_check_container">
                        <div class=" choose_radio">
                            @foreach($packages as $package)

                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                <div class="custom-radio">
                                    <input class="form-check-input" type="radio" value="{{$package->id}}" wire:model="packageId" name="flexRadioDefault10" id="flexRadioDefault-{{$package->id}}">
                                    <div class="checkmark"></div>
                                </div>
                                <label class="form-check-label" for="flexRadioDefault-{{$package->id}}">
                                    {{$package->name}}
                                </label>
                            </div>
                            @endforeach

                        </div>
                       @error('packageId') <small class="text-danger">{{$message}}</small> @enderror
                    </div>
                </div>
                <div class="half_line"></div>
                <div class="info_btn1 mt-4">
                    <button class="btn1" wire:loading.remove  wire:click="submitOrder" role="button">
                        Continue
                    </button>
                    <button  class="btn1" type="button" wire:loading  wire:target="submitOrder">
                        <div  class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="welcome_hivelihood" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="title d-flex flex-column align-items-center text-center px-4">
                    <img src="{{asset('public/front/assets/images/welcome_logo.png')}}" alt="">
                    <p>Please attend test to continue </p>
                </div>
                <div class="modal-body pt-5">
                    <div class="modal_btn_container">
                        <a href="{{$response?->assessmentAccessURL?->uri}}" class="btn1" role="button">
                            Take personality test
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @script
    <script>

    Livewire.on('orderSubmitted',function (){
        $('#welcome_hivelihood').modal('show')
    })

    </script>
@endscript

</section>
