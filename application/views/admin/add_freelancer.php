<div id="layoutSidenav_content">
    <main>

        <div class="container-fluid">
            <div class="container py-5">
                <div class="tabs effect-1">
                    <!-- tab-title -->


                    <section>
                        <!-- Contact Start -->
                        <div class="container-fluid py-5">
                    <div class="container" style="max-width: 900px;">
                        <div class="row">
                            <h3>Personal Detials </h3>
                            <div class="col-12">
                                <div class="contact-form">
                                    <div id="success"></div>
                                    <form action="<?php echo base_url(); ?>index.php/Admin_freelancerAdd" method="POST" enctype="multipart/form-data">


                                        <div class="form-row row">

                                            <div class="col-sm-12 col-md-6 ">
                                                <div class="control-group">
                                                    <input type="text" class="form-control" id="freelancer_name" name="freelancer_name"
                                                        placeholder="Your Name" required="required"
                                                        data-validation-required-message="Please enter your name" />
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 ">
                                                <div class="control-group">
                                                    <input type="email" class="form-control" id="freelancer_email" name="freelancer_email"
                                                        placeholder="Your Email" required="required"
                                                        data-validation-required-message="Please enter your email" />
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 ">
                                                <div class="control-group">
                                                    <input type="text" class="form-control" id="freelancer_number" name="freelancer_number"
                                                        placeholder="Mobile Number" required="required"
                                                        data-validation-required-message="Please enter a Mobile number" />
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 ">
                                                <div class="control-group">
                                                    <input type="text" class="form-control" id="freelancer_password"
                                                        name="freelancer_password" placeholder="Password" required="required"
                                                        data-validation-required-message="Please enter a Mobile number" />
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <textarea class="form-control" rows="3" id="faddress" name="faddress"
                                                placeholder="Address" required="required"
                                                data-validation-required-message="Please enter your Address"></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-row row">

                                            <div class="col-sm-12 col-md-6 col-lg">
                                                <div class="control-group">
                                                    <input type="text" class="form-control" id="freelancer_state" name="freelancer_state"
                                                        placeholder="State" required="required"
                                                        data-validation-required-message="Please enter your email"
                                                        value="karnataka" />
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>


                                            <div class="col-sm-12 col-md-6 col-lg">
                                                <div class="control-group ">
                                                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

                                                    <select class="form-control bg-white" id="freelancer_city" name="freelancer_city"
                                                        size="1" onchange="makeSubmenu1(this.value)">
                                                        <option value="" disabled selected>Choose City</option>
                                                        <option default> Ariyalur</option>
                                                        <option value="Chengalpattu">Chengalpattu</option>
                                                        <option value="Chennai">Chennai</option>
                                                        <option value="Coimbatore">Coimbatore</option>
                                                        <option value="Cuddalore">Cuddalore</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg">
                                                <div class="control-group">
                                                    <select class="form-control bg-white" id="freelancer_taluk" name="freelancer_taluk"
                                                        size="1">
                                                        <option class="form-control" value="" disabled selected>
                                                            Choose Taluk
                                                        </option>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <h3>Bank Detials </h3>
                                        <div class="col">
                                            <div class="control-group">
                                                <input type="text" class="form-control" id="" name=""
                                                    placeholder="Bank Name"
                                                    data-validation-required-message="Please enter name of bank" />
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="control-group">
                                                <input type="text" class="form-control" id="" name=""
                                                    placeholder="Branch Name"
                                                    data-validation-required-message="Please enter Branch name" />
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="control-group">
                                                <input type="text" class="form-control" id="fname" name="fname"
                                                    placeholder="Account Number"
                                                    data-validation-required-message="Please enter your account number" />
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="control-group">
                                                <input type="text" class="form-control" id="" name=""
                                                    placeholder="IFSC Code"
                                                    data-validation-required-message="Please enter your IFSC Code" />
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="control-group">
                                                <input type="text" class="form-control" id="" name="" placeholder="UPID"
                                                    data-validation-required-message="Please enter your UPID" />
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn py-3 px-5" style="background-color:#46c6ce; color:white;"
                                                type="reset" id="sendMessageButton">Reset</button>
                                            <button class="btn btn-primary py-3 px-5" type="submit"
                                                id="sendMessageButton">Submit</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <!-- Contact End -->
                    </section>
                </div>


            </div>
        </div>
    </main>