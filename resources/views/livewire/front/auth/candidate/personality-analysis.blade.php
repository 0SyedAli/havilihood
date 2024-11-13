<section class="auth_container">
    <livewire:front.auth.candidate.side-section />
    <div class="dash_right">
        <div class="dash_right_inner info">
            <h2>What role are you looking for</h2>
            <p>Enter your details</p>
            <form action="javascript:;">
                <div>
                    <label for="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam?</label>
                    <div class="info_check_container">
                        <div class=" choose_radio">
                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                <div class="custom-radio">
                                    <input class="form-check-input" type="radio" type="radio" name="flexRadioDefault10" id="flexRadioDefault1">
                                    <div class="checkmark"></div>
                                </div>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Option - 1
                                </label>
                            </div>
                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                <div class="custom-radio">
                                    <input class="form-check-input" type="radio" type="radio" name="flexRadioDefault10" id="flexRadioDefault2">
                                    <div class="checkmark"></div>
                                </div>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Option - 2
                                </label>
                            </div>
                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                <div class="custom-radio">
                                    <input class="form-check-input" type="radio" type="radio" name="flexRadioDefault10" id="flexRadioDefault3">
                                    <div class="checkmark"></div>
                                </div>
                                <label class="form-check-label" for="flexRadioDefault3">
                                    Option - 3
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="half_line"></div>
                <div>
                    <label for="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam?</label>
                    <div class="info_check_container">
                        <div class=" choose_radio">
                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                <div class="custom-radio">
                                    <input class="form-check-input" type="radio" type="radio" name="flexRadioDefault30" id="flexRadioDefault33">
                                    <div class="checkmark"></div>
                                </div>
                                <label class="form-check-label" for="flexRadioDefault33">
                                    Option - 1
                                </label>
                            </div>
                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                <div class="custom-radio">
                                    <input class="form-check-input" type="radio" type="radio" name="flexRadioDefault30" id="flexRadioDefault34">
                                    <div class="checkmark"></div>
                                </div>
                                <label class="form-check-label" for="flexRadioDefault34">
                                    Option - 2
                                </label>
                            </div>
                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                <div class="custom-radio">
                                    <input class="form-check-input" type="radio" type="radio" name="flexRadioDefault30" id="flexRadioDefault35">
                                    <div class="checkmark"></div>
                                </div>
                                <label class="form-check-label" for="flexRadioDefault35">
                                    Option - 3
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="half_line"></div>
                <div>
                    <label for="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam?</label>
                    <div class="info_check_container">
                        <div class=" choose_radio">
                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                <div class="custom-radio">
                                    <input class="form-check-input" type="radio" type="radio" name="flexRadioDefault20" id="flexRadioDefault22">
                                    <div class="checkmark"></div>
                                </div>
                                <label class="form-check-label" for="flexRadioDefault22">
                                    Option - 1
                                </label>
                            </div>
                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                <div class="custom-radio">
                                    <input class="form-check-input" type="radio" type="radio" name="flexRadioDefault20" id="flexRadioDefault23">
                                    <div class="checkmark"></div>
                                </div>
                                <label class="form-check-label" for="flexRadioDefault23">
                                    Option - 2
                                </label>
                            </div>
                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                <div class="custom-radio">
                                    <input class="form-check-input" type="radio" type="radio" name="flexRadioDefault20" id="flexRadioDefault24">
                                    <div class="checkmark"></div>
                                </div>
                                <label class="form-check-label" for="flexRadioDefault24">
                                    Option - 3
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info_btn1 mt-4">
                    <button class="btn1" data-bs-toggle="modal" data-bs-target="#welcome_hivelihood" role="button">
                        Continue
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="welcome_hivelihood" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="title d-flex flex-column align-items-center text-center px-4">
                    <img src="{{asset('front/assets/images/welcome_logo.png')}}" alt="">
                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros in. Lobortis elementum </p>
                </div>
                <div class="modal-body pt-5">
                    <div class="modal_btn_container">
                        <a href="{{route('profile')}}" class="btn1" role="button">
                            My Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
