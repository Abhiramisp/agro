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
                                            <form action="#" method="POST" enctype="multipart/form-data">

                                                <div class="form-row row">

                                                    <div class="col-sm-12 col-md-6 ">
                                                        <div class="control-group">
                                                            <input type="text" class="form-control" id="freelancer_name"
                                                                name="freelancer_name" placeholder="Your Name"
                                                                required="required"
                                                                value="<?php echo $sqldata1[0]->freelancer_name; ?>"
                                                                data-validation-required-message="Please enter your name" />
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 ">
                                                        <div class="control-group">
                                                            <input type="email" class="form-control"
                                                                id="freelancer_email" name="freelancer_email"
                                                                placeholder="Your Email" required="required"
                                                                value="<?php echo $sqldata1[0]->freelancer_mail; ?>"
                                                                data-validation-required-message="Please enter your email" />
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 ">
                                                        <div class="control-group">
                                                            <input type="text" class="form-control"
                                                                id="freelancer_number" name="freelancer_number"
                                                                placeholder="Mobile Number" required="required"
                                                                value="<?php echo $sqldata1[0]->freelancer_number; ?>"
                                                                data-validation-required-message="Please enter a Mobile number" />
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 ">
                                                        <div class="control-group">
                                                            <input type="text" class="form-control"
                                                                id="freelancer_password" name="freelancer_password"
                                                                placeholder="Password" required="required"
                                                                value="<?php echo $sqldata1[0]->freelancer_password; ?>"
                                                                data-validation-required-message="Please enter a Mobile number" />
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-row row">

                                                    <div class="col-sm-12 col-md-6 col-lg">
                                                        <div class="control-group">
                                                            <input type="text" class="form-control"
                                                                id="freelancer_state" name="freelancer_state"
                                                                placeholder="State" required="required"
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

                                                            <select class="form-control bg-white" id="freelancer_city"
                                                                name="freelancer_city" size="1"
                                                                onchange="makeSubmenu1(this.value)">
                                                                <option
                                                                    value="<?php echo $sqldata1[0]->freelancer_city; ?>"
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
                                                            <select class="form-control bg-white" id="freelancer_taluk"
                                                                name="freelancer_taluk" size="1">
                                                                <option class="form-control"
                                                                    value="<?php echo $sqldata1[0]->freelancer_taluk; ?>"
                                                                    disabled selected>
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
                                                    <div class="col">
                                                        <div class="control-group">
                                                            <input type="text" class="form-control" id="bank_name"
                                                                name="bank_name" placeholder="Bank Name"
                                                                value="<?php echo $sqldata2[0]->bank_name; ?>"
                                                                data-validation-required-message="Please enter name of bank" />
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="control-group">
                                                            <input type="text" class="form-control" id="branch_name"
                                                                value="<?php echo $sqldata2[0]->bank_branch; ?>"
                                                                name="branch_name" placeholder="Branch Name"
                                                                data-validation-required-message="Please enter Branch name" />
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="control-group">
                                                            <input type="text" class="form-control" id="AC_num"
                                                                name="AC_num" placeholder="Account Number"
                                                                value="<?php echo $sqldata2[0]->bank_ac_number; ?>"
                                                                data-validation-required-message="Please enter your account number" />
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="control-group">
                                                            <input type="text" class="form-control" id="ifsc"
                                                                name="ifsd"
                                                                value="<?php echo $sqldata2[0]->bank_ifsc; ?>"
                                                                placeholder="IFSC Code"
                                                                data-validation-required-message="Please enter your IFSC Code" />
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="control-group">
                                                            <input type="text" class="form-control" id="upid"
                                                                name="upid" placeholder="UPID"
                                                                value="<?php echo $sqldata2[0]->bank_upid; ?>"
                                                                data-validation-required-message="Please enter your UPID" />
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <button class="btn py-3 px-5"
                                                                style="background-color:#46c6ce; color:white;"
                                                                type="reset" id="sendMessageButton">Reset</button>
                                                        </div>
                                                        <div class="col">
                                                            <button class="btn btn-primary py-3 px-5" type="submit"
                                                                id="sendMessageButton">Submit</button>
                                                        </div>
                                                        <div class="col">
                                                            <button class="btn btn-primary py-3 px-5" type="button"
                                                                id="approveButton">Approve</button>
                                                            <button class="btn btn-danger py-3 px-5" type="button"
                                                                id="rejectButton" style="display: none;">Reject</button>
                                                        </div>
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