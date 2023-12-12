<div class="container-fluid mb-5 hero-header">
    <section class="vh-100" style="background-color:white;">
        <div class="container  h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block justify-content-center align-items-center">
                            <img src="<?php echo base_url(); ?>assets/img/img/hero-img-1.png" alt="login form"
                                class="img-fluid" style="border-radius: 1rem 1rem 0 0;" />
                            <img src="<?php echo base_url(); ?>assets/img/img/hero-img-2.jpg" alt="login form"
                                class="img-fluid" style="border-radius: 0 0 1rem 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form action="<?php echo base_url(); ?>index.php/Login_action" method="POST" enctype="multipart/form-data"
                                    onsubmit="">
                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                                        account</h5>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="user" name="user" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example17">Mobile Number</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="pass" name="pass"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example27">Password</label>
                                    </div>


                                    <div class="row d-flex justify-content-around">

                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input" id="customCheck2"
                                                name="optradio" value="farmer">
                                            <label class="form-check-label" for="customCheck2">Seller</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input" id="customCheck"
                                                name="optradio" value="buyer">
                                            <label class="form-check-label" for="customCheck">Buyer</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input" id="customCheck3"
                                                name="optradio" value="freelancer">
                                            <label class="form-check-label" for="customCheck3">Freelancer</label>

                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input" id="customCheck4"
                                                name="optradio" value="transport">
                                            <label class="form-check-label" for="customCheck4">Transport</label>

                                        </div>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <!-- Freelancer_homePage  Farmer_homePage   buyer_homePage    Transpoter_homePage-->

                                        <button class="btn btn-outline-primary btn-lg btn-block" type="submit"
                                            >Login</button>
                                    </div>

                                    <a class="small text-muted" href="#!">Forgot password?</a>
                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a
                                            href="<?php echo base_url(); ?>index.php/Register"
                                            style="color: #393f81;">Register here</a></p>

                                </form>
                              

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>