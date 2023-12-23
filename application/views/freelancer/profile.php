<div class="container-fluid py-5 mb-5 hero-header">
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold">Edogaru</span><span
                        class="text-black-50">edogaru@mail.com.my</span><span>
                    </span></div>
            </div>
            <div class="col border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="container-fluid py-5">
                        <div class="container" style="max-width: 900px;">
                            <div class="row">
                                <h3>Personal Detials </h3>
                                <div class="col-12">
                                    <div class="contact-form">
                                        <div id="success"></div>
                                        <form action="#" method="POST" enctype="multipart/form-data">

                                            <div class="form-row row">

                                                <div class="col-sm-12 col-md-6 ">
                                                    <div class="control-group">
                                                        <input type="text" class="form-control" id="fname" name="fname"
                                                            placeholder="Your Name" required="required"
                                                            value="<?php echo $sqldata1[0]->freelancer_name; ?>"
                                                            data-validation-required-message="Please enter your name" />
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 ">
                                                    <div class="control-group">
                                                        <input type="email" class="form-control" id="fmail" name="fmail"
                                                            placeholder="Your Email" required="required"
                                                            value="<?php echo $sqldata1[0]->freelancer_mail; ?>"
                                                            data-validation-required-message="Please enter your email" />
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 ">
                                                    <div class="control-group">
                                                        <input type="text" class="form-control" id="fmobile"
                                                            name="fmobile" placeholder="Mobile Number"
                                                            required="required"
                                                            value="<?php echo $sqldata1[0]->freelancer_number; ?>"
                                                            data-validation-required-message="Please enter a Mobile number" />
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 ">
                                                    <div class="control-group">
                                                        <input type="text" class="form-control" id="fpassword"
                                                            name="fpassword" placeholder="Password" required="required"
                                                            value="<?php echo $sqldata1[0]->freelancer_password; ?>"
                                                            data-validation-required-message="Please enter a Password" />
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row row">

                                                <div class="col-sm-12 col-md-6 col-lg">
                                                    <div class="control-group">
                                                        <input type="text" class="form-control" id="fstate"
                                                            name="fstate" placeholder="State" required="required"
                                                            value="<?php echo $sqldata1[0]->freelancer_state; ?>"
                                                            data-validation-required-message="Please enter your email"
                                                            value="karnataka" />
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>


                                                <div class="col-sm-12 col-md-6 col-lg">
                                                    <div class="control-group ">
                                                        <meta http-equiv="Content-Type"
                                                            content="text/html; charset=UTF-8">

                                                        <select class="form-control bg-white" id="fcity" name="fcity"
                                                            size="1" onchange="makeSubmenu1(this.value)">
                                                            <option value="<?php echo $sqldata1[0]->freelancer_city; ?>"
                                                                disabled selected>
                                                                <?php echo $sqldata1[0]->freelancer_city; ?>
                                                            </option>
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
                                                        <select class="form-control bg-white" id="ftaluk" name="ftaluk"
                                                            size="1">
                                                            <option class="form-control" value="<?php echo $sqldata1[0]->freelancer_taluk; ?>" disabled selected>
                                                            <?php echo $sqldata1[0]->freelancer_taluk; ?>
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
                                                    <input type="text" class="form-control" id="" name=""
                                                        placeholder="UPID"
                                                        data-validation-required-message="Please enter your UPID" />
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                                    type="button">Save
                                                    Profile</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>