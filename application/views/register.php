<div class="container-fluid py-5 mb-5 hero-header">
    <div class="container">

        <div class="tabs effect-1">
            <!-- tab-title -->
            <input type="radio" id="tab-1" name="tab-effect-1" checked="checked">
            <span>Seller </span>

            <input type="radio" id="tab-2" name="tab-effect-1">
            <span>Buyer</span>

            <input type="radio" id="tab-3" name="tab-effect-1">
            <span>Freelancer</span>
            <input type="radio" id="tab-4" name="tab-effect-1">
            <span>Transport</span>


            <!-- tab-content -->
            <div class="tab-content">
                <section id="tab-item-1">
                    <h3>Seller registration </h3>
                    <!-- Contact Start -->
                    <div class="container-fluid py-5">
                        <div class="container" style="max-width: 900px;">
                            <div class="row">
                                <h3>Personal Detials </h3>
                                <div class="col-12">
                                    <div class="contact-form">
                                        <div id="success"></div>
                                        <form action="<?php echo base_url(); ?>index.php/Register_farmer" method="POST"
                                            enctype="multipart/form-data">

                                            <div class="form-row row">

                                                <div class="col-sm-12 col-md-6 ">
                                                    <div class="control-group">
                                                        <input type="text" class="form-control" id="fname" name="fname"
                                                            placeholder="Your Name" required="required"
                                                            data-validation-required-message="Please enter your name" />
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 ">
                                                    <div class="control-group">
                                                        <input type="email" class="form-control" id="fmail" name="fmail"
                                                            placeholder="Your Email" required="required"
                                                            data-validation-required-message="Please enter your email" />
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 ">
                                                    <div class="control-group">
                                                        <input type="text" class="form-control" id="fmobile"
                                                            name="fmobile" placeholder="Mobile Number"
                                                            required="required"
                                                            data-validation-required-message="Please enter a Mobile number" />
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 ">
                                                    <div class="control-group">
                                                        <input type="text" class="form-control" id="fpassword"
                                                            name="fpassword" placeholder="Password" required="required"
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
                                                        <input type="text" class="form-control" id="fstate"
                                                            name="fstate" placeholder="State" required="required"
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
                                                        <select class="form-control bg-white" id="ftaluk" name="ftaluk"
                                                            size="1">
                                                            <option class="form-control" value="" disabled selected>
                                                                Choose Taluk
                                                            </option>
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 ">
                                                <div class="control-group">
                                                    <input type="text" class="form-control" id="fland" name="fland"
                                                        placeholder="Land Area" required="required"
                                                        data-validation-required-message="Please enter a Land Area" />
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 ">
                                                <div class="control-group">
                                                    <input type="text" class="form-control" id="fproduct"
                                                        name="fproduct" placeholder="Products" required="required"
                                                        data-validation-required-message="Please enter a Products" />
                                                    <p class="help-block text-danger"></p>
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
                                            <input type="text" class="form-control" id="" name=""
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
            <section id="tab-item-2">
                <h3>Buyer registration </h3>

                <!-- Contact Start -->
                <div class="container-fluid py-5">
                    <div class="container" style="max-width: 900px;">
                        <div class="row">
                            <h3>Personal Detials </h3>
                            <div class="col-12">
                                <div class="contact-form">
                                    <div id="success"></div>
                                    <form action="<?php echo base_url(); ?>index.php/Register_buyer" method="POST" enctype="multipart/form-data">

                                        <div class="form-row row">

                                            <div class="col-sm-12 col-md-6 ">
                                                <div class="control-group">
                                                    <input type="text" class="form-control" id="b_name" name="b_name"
                                                        placeholder="Your Name" required="required"
                                                        data-validation-required-message="Please enter your name" />
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 ">
                                                <div class="control-group">
                                                    <input type="email" class="form-control" id="b_email" name="b_email"
                                                        placeholder="Your Email" required="required"
                                                        data-validation-required-message="Please enter your email" />
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 ">
                                                <div class="control-group">
                                                    <input type="text" class="form-control" id="b_number" name="b_number"
                                                        placeholder="Mobile Number" required="required"
                                                        data-validation-required-message="Please enter a Mobile number" />
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 ">
                                                <div class="control-group">
                                                    <input type="text" class="form-control" id="b_password"
                                                        name="b_password" placeholder="Password" required="required"
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
                                                    <input type="text" class="form-control" id="b_state" name="b_state"
                                                        placeholder="State" required="required"
                                                        data-validation-required-message="Please enter your email"
                                                        value="karnataka" />
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>


                                            <div class="col-sm-12 col-md-6 col-lg">
                                                <div class="control-group ">
                                                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

                                                    <select class="form-control bg-white" id="b_city" name="b_city"
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
                                                    <select class="form-control bg-white" id="b_taluk" name="b_taluk"
                                                        size="1">
                                                        <option class="form-control" value="" disabled selected>
                                                            Choose Taluk
                                                        </option>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <textarea class="form-control" rows="1" id="b_shipping_loc" name="b_shipping_loc"
                                                placeholder="Shipping Location"
                                                data-validation-required-message="Please enter you Shipping Location"></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>

                                        <div class="control-group">
                                            <textarea class="form-control" rows="1" id="b_company_name" name="b_company_name"
                                                placeholder="Company Name"
                                                data-validation-required-message="Please enter you Company Name"></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>

                                        <div class="control-group">
                                            <textarea class="form-control" rows="1" id="b_comloc" name="b_comloc"
                                                placeholder="Company Location"
                                                data-validation-required-message="Please enter you Company Location"></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>

                                        <div class="control-group">
                                            <textarea class="form-control" rows="1" id="b_gstnum" name="b_gstnum"
                                                placeholder="GST Number"
                                                data-validation-required-message="Please enter you GST Number"></textarea>
                                            <p class="help-block text-danger"></p>
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
            <section id="tab-item-3">
                <h3>Freelancer registration </h3>
                <!-- Contact Start -->
                <div class="container-fluid py-5">
                    <div class="container" style="max-width: 900px;">
                        <div class="row">
                            <h3>Personal Detials </h3>
                            <div class="col-12">
                                <div class="contact-form">
                                    <div id="success"></div>
                                    <form action="<?php echo base_url(); ?>index.php/Register_freelancer" method="POST" enctype="multipart/form-data">


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

            <section id="tab-item-4">


                <h3>Transport registration </h3>

                <!-- Contact Start -->
                <div class="container-fluid py-5">
                    <div class="container" style="max-width: 900px;">
                        <div class="row">
                            <h3>Personal Detials </h3>
                            <div class="col-12">
                                <div class="contact-form">
                                    <div id="success"></div>
                                    <form action="<?php echo base_url(); ?>index.php/Register_transporter" method="POST" enctype="multipart/form-data">



                                        <div class="form-row row">

                                            <div class="col-sm-12 col-md-6 ">
                                                <div class="control-group">
                                                    <input type="text" class="form-control" id="t_name" name="t_name"
                                                        placeholder="Your Name" required="required"
                                                        data-validation-required-message="Please enter your name" />
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 ">
                                                <div class="control-group">
                                                    <input type="email" class="form-control" id="t_mail" name="t_mail"
                                                        placeholder="Your Email" required="required"
                                                        data-validation-required-message="Please enter your email" />
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 ">
                                                <div class="control-group">
                                                    <input type="text" class="form-control" id="t_mobile" name="t_mobile"
                                                        placeholder="Mobile Number" required="required"
                                                        data-validation-required-message="Please enter a Mobile number" />
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 ">
                                                <div class="control-group">
                                                    <input type="text" class="form-control" id="t_password"
                                                        name="t_password" placeholder="Password" required="required"
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
                                                    <input type="text" class="form-control" id="t_state" name="t_state"
                                                        placeholder="State" required="required"
                                                        data-validation-required-message="Please enter your email"
                                                        value="karnataka" />
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>


                                            <div class="col-sm-12 col-md-6 col-lg">
                                                <div class="control-group ">
                                                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

                                                    <select class="form-control bg-white" id="t_city" name="t_city"
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
                                                    <select class="form-control bg-white" id="t_taluk" name="t_taluk"
                                                        size="1">
                                                        <option class="form-control" value="" disabled selected>
                                                            Choose Taluk
                                                        </option>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row row">

                                            <div class="col-sm-12 col-md-6 ">
                                                <div class="control-group">
                                                    <input class="form-control" rows="1" id="vehicle_type" name="vehicle_type"
                                                        placeholder="Vehicle Type"
                                                        data-validation-required-message="Please enter you Vehicle Type" />
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 ">
                                                <div class="control-group">
                                                    <input class="form-control" rows="1" id="vehicle_number" name="vehicle_number"
                                                        placeholder="Vehicle Number"
                                                        data-validation-required-message="Please enter you Vehicle Number" />
                                                    <p class="help-block text-danger"></p>
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
</div>