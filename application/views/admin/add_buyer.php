<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid py-5">
        
                    <div class="container" style="max-width: 900px;">
                        <div class="row">
                            <h3>Personal Detials </h3>
                            <div class="col-12">
                                <div class="contact-form">
                                    <div id="success"></div>
                                    <form action="<?php echo base_url(); ?>index.php/Admin_buyerAdd" method="POST" enctype="multipart/form-data">

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
                                            <input class="form-control" rows="1" id="b_company_name" name="b_company_name"
                                                placeholder="Company Name"
                                                data-validation-required-message="Please enter you Company Name">
                                            <p class="help-block text-danger"></p>
                                        </div>

                                        <div class="control-group">
                                            <textarea class="form-control" rows="1" id="b_comloc" name="b_comloc"
                                                placeholder="Company Location"
                                                data-validation-required-message="Please enter you Company Location"></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>

                                        <div class="control-group">
                                            <input class="form-control" rows="1" id="b_gstnum" name="b_gstnum"
                                                placeholder="GST Number"
                                                data-validation-required-message="Please enter you GST Number">
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
    </main>