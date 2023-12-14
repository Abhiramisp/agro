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
                                                            <input type="text" class="form-control" id="b_name"
                                                                name="b_name" placeholder="Your Name"
                                                                required="required"
                                                                value="<?php echo $sqldata1[0]->b_name; ?>"
                                                                data-validation-required-message="Please enter your name" />
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 ">
                                                        <div class="control-group">
                                                            <input type="email" class="form-control" id="b_email"
                                                                name="b_email" placeholder="Your Email"
                                                                required="required"
                                                                value="<?php echo $sqldata1[0]->b_email; ?>"
                                                                data-validation-required-message="Please enter your email" />
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 ">
                                                        <div class="control-group">
                                                            <input type="text" class="form-control" id="b_number"
                                                                name="b_number" placeholder="Mobile Number"
                                                                required="required"
                                                                value="<?php echo $sqldata1[0]->b_number; ?>"
                                                                data-validation-required-message="Please enter a Mobile number" />
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 ">
                                                        <div class="control-group">
                                                            <input type="text" class="form-control" id="b_password"
                                                                name="b_password" placeholder="Password"
                                                                value="<?php echo $sqldata1[0]->b_password; ?>"
                                                                required="required"
                                                                data-validation-required-message="Please enter a Mobile number" />
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row row">

                                                    <div class="col-sm-12 col-md-6 col-lg">
                                                        <div class="control-group">
                                                            <input type="text" class="form-control" id="b_state"
                                                                name="b_state" placeholder="State" required="required"
                                                                data-validation-required-message="Please enter your email"
                                                                value="<?php echo $sqldata1[0]->b_state; ?>" />
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12 col-md-6 col-lg">
                                                        <div class="control-group ">
                                                            <meta http-equiv="Content-Type"
                                                                content="text/html; charset=UTF-8">

                                                            <select class="form-control bg-white" id="b_city"
                                                                name="b_city" size="1"
                                                                onchange="makeSubmenu1(this.value)">
                                                                <option value="<?php echo $sqldata1[0]->b_city; ?>"
                                                                    disabled selected>
                                                                    <?php echo $sqldata1[0]->b_city; ?>
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
                                                            <select class="form-control bg-white" id="b_taluk"
                                                                name="b_taluk" size="1">
                                                                <option class="form-control"
                                                                    value="<?php echo $sqldata1[0]->b_taluk; ?>"
                                                                    disabled selected>
                                                                    <?php echo $sqldata1[0]->b_taluk; ?>

                                                                </option>
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <textarea class="form-control" rows="1" id="b_shipping_loc"
                                                        name="b_shipping_loc" placeholder="Shipping Location"
                                                        value="<?php echo $sqldata1[0]->b_shipping_loc; ?>"
                                                        data-validation-required-message="Please enter you Shipping Location"></textarea>
                                                    <p class="help-block text-danger"></p>
                                                </div>

                                                <div class="control-group">
                                                    <input class="form-control" rows="1" id="b_company_name"
                                                        name="b_company_name" placeholder="Company Name"
                                                        value="<?php echo $sqldata1[0]->b_company_name; ?>"
                                                        data-validation-required-message="Please enter you Company Name">
                                                    <p class="help-block text-danger"></p>
                                                </div>

                                                <div class="control-group">
                                                    <textarea class="form-control" rows="1" id="b_comloc"
                                                        name="b_comloc" placeholder="Company Location"
                                                        value="<?php echo $sqldata1[0]->b_comloc; ?>"
                                                        data-validation-required-message="Please enter you Company Location"></textarea>
                                                    <p class="help-block text-danger"></p>
                                                </div>

                                                <div class="control-group">
                                                    <input class="form-control" rows="1" id="b_gstnum" name="b_gstnum"
                                                        placeholder="GST Number" value="<?php echo $sqldata1[0]->b_gst_number; ?>"
                                                        data-validation-required-message="Please enter you GST Number">
                                                    <p class="help-block text-danger"></p>
                                                </div>

                                                <div class="row">
                                                    <div class="col">
                                                        <button class="btn py-3 px-5"
                                                            style="background-color:#46c6ce; color:white;" type="reset"
                                                            id="sendMessageButton">Reset</button>
                                                    </div>
                                                    <div class="col">
                                                        <button class="btn btn-primary py-3 px-5" type="submit"
                                                            id="sendMessageButton">Submit</button>
                                                    </div>
                                                    <!-- <div class="col">
                                                        <button class="btn btn-primary py-3 px-5" type="button"
                                                            id="approveButton">Approve</button>
                                                        <button class="btn btn-danger py-3 px-5" type="button"
                                                            id="rejectButton" style="display: none;">Reject</button>
                                                    </div> -->
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