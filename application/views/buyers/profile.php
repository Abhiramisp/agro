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
                                                    <input type="text" class="form-control" id="fmobile" name="fmobile"
                                                        placeholder="Mobile Number" required="required"
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
                                                    <input type="text" class="form-control" id="fstate" name="fstate"
                                                        placeholder="State" required="required"
                                                        data-validation-required-message="Please enter your email"
                                                        value="karnataka" />
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>
                                            

                                            <div class="col-sm-12 col-md-6 col-lg">
                                                <div class="control-group ">
                                                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

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
                                    
                                        <div class="control-group">
                                            <textarea class="form-control" rows="1" id="" name=""
                                                placeholder="Shipping Location" 
                                                data-validation-required-message="Please enter you Shipping Location"></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>

                                        <div class="control-group">
                                            <textarea class="form-control" rows="1" id="" name=""
                                                placeholder="Company Name" 
                                                data-validation-required-message="Please enter you Company Name"></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>

                                        <div class="control-group">
                                            <textarea class="form-control" rows="1" id="" name=""
                                                placeholder="Company Location" 
                                                data-validation-required-message="Please enter you Company Location"></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>

                                        <div class="control-group">
                                            <textarea class="form-control" rows="1" id="" name=""
                                                placeholder="GST Number" 
                                                data-validation-required-message="Please enter you GST Number"></textarea>
                                            <p class="help-block text-danger"></p>
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