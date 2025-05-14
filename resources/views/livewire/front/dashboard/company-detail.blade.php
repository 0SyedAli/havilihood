<section class="dashboard_container">
    @section('dash-profile','active')
    <livewire:front.dashboard.side-section />
    <div class="dashboard_display">
        <div class="saved_job_dashboard">
            <div class="row">
                <div class="col-12">
                    <h2 class="sjd_h2" style="margin: 50px 0 40px;">Profile</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="profile_dp">
                        <label for="image_path" role="button">
                        <img src="{{ $image_path ? $image_path->temporaryUrl() : asset(auth()->user()->company?->image_path) }}" alt="">
                            <input type="file" hidden="" wire:model="image_path" id="image_path">
                        </label>
                        <div class="profile_dp_name">
                            <h4>Company:</h4>
                            <h4><span>{{auth()->user()->company?->name}}</span></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="proflie_details">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="table-responsive">
                                    <table class="w-100">
                                        <tbody>
                                        <tr>
                                            <th class="col-5">
                                                <h5>Company Name:</h5>
                                            </th>
                                            <td class="col-7">
                                                <input type="text" placeholder="xxxx xxxxxxx" wire:model="company_name" >
                                                @error('company_name')
                                                <br>
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="col-5">
                                                <h5>Total Employees:</h5>
                                            </th>
                                            <td class="col-7">
                                                <input type="text" placeholder="xxxx xxxxxxx" wire:model="total_employees" >
                                                @error('total_employees')
                                                <br>
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="col-5">
                                                <h5>Work Email:</h5>
                                            </th>
                                            <td class="col-7">
                                                <input type="text" placeholder="xxxx xxxxxxx" wire:model="work_email" >
                                                @error('work_email')
                                                <br>
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="col-5">
                                                <h5>Location:</h5>
                                            </th>
                                            <td class="col-7">
                                                <input type="text" placeholder="xxxx xxxxxxx" wire:model="location" >
                                                @error('location')
                                                <br>
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="table-responsive">
                                    <table class="w-100">
                                        <tbody>
                                        <tr>
                                            <th class="col-5">
                                                <h5>Employment Type:</h5>
                                            </th>
                                            <td class="col-7">
                                                <input type="text" placeholder="xxxx xxxxxxx" wire:model="employment_type" >
                                                @error('employment_type')
                                                <br>
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror

                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="col-5">
                                                <h5>Job Fetch Url:</h5>
                                            </th>
                                            <td class="col-7">
                                                <input type="text" placeholder="xxxx xxxxxxx" wire:model="job_url" >
                                                @error('job_url')
                                                <br>
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="col-5">
                                                <h5>Website Url:</h5>
                                            </th>
                                            <td class="col-7">
                                                <input type="text" placeholder="xxxx xxxxxxx" wire:model="website" >
                                                @error('website')
                                                <br>
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="proflie_details">
                        <div class="d-flex align-items-center justify-content-end gap-4 flex-wrap">
                            <button class="btn1 w-25" wire:loading.remove wire:click="save"  wire:target="save" >
                                Save
                            </button>
                            <button  class="btn1 w-25" type="button" wire:loading  wire:target="save">
                                <div  class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
