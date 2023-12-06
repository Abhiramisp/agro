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
                                                            <input type="text" class="form-control" id="fname"
                                                                name="fname" placeholder="Your Name" required="required"
                                                                data-validation-required-message="Please enter your name" />
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 ">
                                                        <div class="control-group">
                                                            <input type="email" class="form-control" id="fmail"
                                                                name="fmail" placeholder="Your Email"
                                                                required="required"
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
                                                                name="fpassword" placeholder="Password"
                                                                required="required"
                                                                data-validation-required-message="Please enter a Mobile number" />
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <textarea class="form-control" rows="3" id="faddress"
                                                        name="faddress" placeholder="Address" required="required"
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

                                                            <select class="form-control bg-white" id="fcity"
                                                                name="fcity" size="1"
                                                                onchange="makeSubmenu1(this.value)">
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
                                                            <select class="form-control bg-white" id="ftaluk"
                                                                name="ftaluk" size="1">
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
                                                    <input class="form-control" rows="1" id="" name=""
                                                        placeholder="Vehicle Type"
                                                        data-validation-required-message="Please enter you Vehicle Type"/>
                                                    <p class="help-block text-danger"></p>
                                                </div></div>
                                                <div class="col-sm-12 col-md-6 ">
                                                <div class="control-group">
                                                    <input class="form-control" rows="1" id="" name=""
                                                        placeholder="Vehicle Number"
                                                        data-validation-required-message="Please enter you Vehicle Number"/>
                                                    <p class="help-block text-danger"></p>
                                                </div>
</div></div>
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
                                                <div>
                                           
                                                    <button class="btn btn-primary py-3 px-5" type="submit"
                                                        id="sendMessageButton">update</button>
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