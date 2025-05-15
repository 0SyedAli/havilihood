<div class="modal fade @if($modal) show @endif " id="education" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" @if($modal) style="display: block; padding-left: 0px;" @endif>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            <div class="modal-body job-seeker">
                <div class="form-get-quote md_form" >
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="form-input">
                                <h4 for="">College/Institute Name</h4>
                                <input type="text" placeholder="College/Institute Name" wire:model="college_name">
                                @error('college_name')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-input">
                                <h4 for="">Certificate/Degree</h4>
                                <input type="text" placeholder="Certificate/Degree" wire:model="certificate">
                                @error('certificate')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">

                                <div class="form-input">
                                    <h4 for="">Start Date</h4>
                                    <input type="date" class="form-control"  wire:model="start_date" >
                                    @error('start_date')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-input">
                                    <h4 >
                                        End Date
                                        <label for="continue">Continue</label> <input type="checkbox" id="continue"  wire:model.change="continues" />
                                    </h4>
                                    @if(!$continues)
                                        <input type="date" class="form-control" wire:model="end_date" >
                                    @endif
                                    @error('end_date')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-input">
                                <h4 for="description">Description</h4>
                                <textarea class="form-control" id="description" wire:model="description"></textarea>
                                @error('description')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>


                            <div class="modal_btn_container gap-5">
                                <button class="btn1" role="button" data-bs-dismiss="modal"  >
                                    Close
                                </button>
                                <button class="btn1" role="button" wire:click="saveEducation" >
                                    Save
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
