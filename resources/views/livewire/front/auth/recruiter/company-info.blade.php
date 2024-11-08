<section class="auth_container">
    <livewire:front.auth.recruiter.side-section />
    <div class="dash_right">
        <div class="dash_right_inner info info2">
            <h3>Great! Let us know a bit more about your company</h3>
            <form action="javascript:;">
                <div class="row">
                    <div class="col-12">
                        <div class="info_input">
                            <input type="text" required placeholder="Company Website">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="info_input">
                            <input type="text" placeholder="Job Fetch URL">
                            <p><span>NOTE:</span> Link to you job hiring application page</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="info_input">
                            <input type="text" placeholder="Number of Employees">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="info_input">
                            <input type="text" placeholder="Employment Type">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="info_input">
                            <input type="text" placeholder="Headquarter City">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="upload_input2">
                            <img src="{{asset('front/assets/images/upload_btn2.png')}}" alt="">
                            <input type="file" name="" id="">
                        </div>
                        <div class="info_input readonly_input">
                            <input type="text" readonly="true" aria-readonly="true" placeholder="Upload Company Logo">
                        </div>
                    </div>
                </div>
                <div class="info_btn1">
                    <button class="btn1" role="button" data-bs-toggle="modal" data-bs-target="#comfirm_detail">
                        Continue
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="comfirm_detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="title">
                    <h2>Please Confirm Below Details</h2>
                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros in. Lobortis elementum </p>
                </div>
                <div class="modal-body proflie_details">
                    <div class="table-responsive">
                        <table class="w-100">
                            <tbody>
                            <tr>
                                <th class="col-5">
                                    <h5>First Name:</h5>
                                </th>
                                <td class="col-7">
                                    <h5><span>xxxx xxxxxxx</span></h5>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-5">
                                    <h5>Last Name:</h5>
                                </th>
                                <td class="col-7">
                                    <h5><span>xxxx xxxxxxx</span></h5>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-5">
                                    <h5>Company:</h5>
                                </th>
                                <td class="col-7">
                                    <h5><span>xxxx xxxxxxx</span></h5>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-5">
                                    <h5>Job Title:</h5>
                                </th>
                                <td class="col-7">
                                    <h5><span>xxxx xxxxxxx</span></h5>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-5">
                                    <h5>Work Email:</h5>
                                </th>
                                <td class="col-7">
                                    <h5><span>xxxx xxxxxxx</span></h5>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                <td></td>
                                </th>
                            </tr>
                            <tr>
                                <th class="col-5">
                                    <h5>Company Website:</h5>
                                </th>
                                <td class="col-7">
                                    <h5><span>xxxx xxxxxxx</span></h5>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-5">
                                    <h5># of Employees:</h5>
                                </th>
                                <td class="col-7">
                                    <h5><span>xxxx xxxxxxx</span></h5>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-5">
                                    <h5>Employer Type:</h5>
                                </th>
                                <td class="col-7">
                                    <h5><span>xxxx xxxxxxx</span></h5>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-5">
                                    <h5>Headquarter City:</h5>
                                </th>
                                <td class="col-7">
                                    <h5><span>xxxx xxxxxxx</span></h5>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-5">
                                </th>
                                <td class="col-7">
                                </td>
                            </tr>
                            <tr>
                                <th class="col-5">
                                    <h5>Company Logo</h5>
                                </th>
                                <td class="col-7">
                                    <img src="{{asset('front/assets/images/compo_img.png')}}" class="img-fluid" alt="">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="px-0 d-flex align-items-start gap-3">
                                <div class="custom-checkbox">
                                    <input class="form-check-input" type="checkbox" value="" id="check15">
                                    <div class="checkmark"></div>
                                </div>
                                <label class="form-check-label w90" for="check12">
                                    I confirm I represent HR, Recruiting, Marketing, PR or am an Executive at my company and I agree to Hivelihood <a href="javascript:;">Terms of Service</a> and <a href="javascript:;">Privacy Policy</a> on behalf of my company.
                                </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="modal_btn_container justify-content-between gap-5">
                                <a href="{{route('employer.info')}}" class="btn1" role="button">
                                    Resubmit Information
                                </a>
                                <button class="btn1" role="button" data-bs-toggle="modal" data-bs-target="#welcome_hivelihood2">
                                    Create Account
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="welcome_hivelihood2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="title d-flex flex-column align-items-center text-center px-4">
                    <img src="{{asset('front/assets/images/welcome_logo.png')}}" alt="">
                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros in. Lobortis elementum </p>
                </div>
                <div class="modal-body pt-5">
                    <div class="modal_btn_container">
                        <a href="{{route('jobs')}}" class="btn1" role="button">
                            My Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
