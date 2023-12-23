<div class="container-fluid py-5 mb-5 hero-header">

    <div class="container">
        <!-- tab-title -->


        <section>
            <!-- Contact Start -->
            <div class="container-fluid py-5">
                <div class="container" style="max-width: 900px;">
                    <div class="row">
                        <h3>Product Detials </h3>
                        <div class="col-12">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form action="<?php echo base_url(); ?>index.php/" method="POST"
                                    enctype="multipart/form-data">

                                    <div class="form-row row">

                                        <div class="">
                                            <div class="control-group">
                                                <input type="text" class="form-control" id="p_name" name="p_name"
                                                    placeholder="Product Name" required="required"
                                                    data-validation-required-message="Please enter Product Name" />
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="control-group">
                                                <textarea type="email" class="form-control" id="p_dis" name="p_dis"
                                                    placeholder="Product Description" rows="3" required="required"
                                                    data-validation-required-message="Please enter Product Description"></textarea>
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="control-group ">
                                                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

                                                <select class="form-control bg-white" id="p_type" name="p_type" size="1"
                                                    onchange="">
                                                    <option value="" disabled selected>Choose Sub Product Type
                                                    </option>
                                                    <option default>Immediate sell product</option>
                                                    <option value="Future ">Future product</option>
                                                    <option value="Short-term ">Short-term Product</option>
                                                </select>
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row row">
                                        <div class="col-sm-12 col-md-3 col-lg">
                                            <div class="control-group ">
                                                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

                                                <select class="form-control bg-white" id="p_categories"
                                                    name="p_categories" size="1" onchange="">
                                                    <option value="" disabled selected>Choose Category
                                                    </option>
                                                    <option default> Ariyalur</option>
                                                    <option value="Chengalpattu">Chengalpattu</option>
                                                    <option value="Chennai">Chennai</option>
                                                    <option value="Coimbatore">Coimbatore</option>
                                                    <option value="Cuddalore">Cuddalore</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-3 col-lg">
                                            <div class="control-group ">
                                                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

                                                <select class="form-control bg-white" id="p_s_cat" name="p_s_cat"
                                                    size="1" onchange="">
                                                    <option value="" disabled selected>Choose Sub Category
                                                    </option>
                                                    <option default> Ariyalur</option>
                                                    <option value="Chengalpattu">Chengalpattu</option>
                                                    <option value="Chennai">Chennai</option>
                                                    <option value="Coimbatore">Coimbatore</option>
                                                    <option value="Cuddalore">Cuddalore</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-3 col-lg">
                                            <div class="control-group">
                                                <input type="text" class="form-control" id="p_quantity"
                                                    name="p_quantity" placeholder="Product Quantity" required="required"
                                                    data-validation-required-message="Please enter a Product Quantity" />
                                                <p class="help-block text-danger"></p>
                                            </div>

                                        </div>
                                        <div class="col-sm-12 col-md-3 col-lg">
                                            <div class="control-group">
                                                <input type="text" class="form-control" id="p_price" name="p_price"
                                                    placeholder="Product Price" required="required"
                                                    data-validation-required-message="Please enter a Product Price" />
                                                <p class="help-block text-danger"></p>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="control-group">
                                        <div class="form-group col-md-6">

                                            <label for="inputPassword4">Organic/Inorganic</label><br>
                                            <div class=" container">
                                                <input type="radio" class="mr-2" id="p_in_or" name="p_in_or"
                                                    value="YES">Organic<br>
                                                <input type="radio" class="mr-2" id="p_in_or" name="p_in_or"
                                                    value="NO">Inorganic <br>
                                            </div>
                                        </div>


                                        <div class="col-sm-12 col-md">
                                            <h6>Date of Supply</h6>
                                            <div class="control-group">
                                                <input type="date" class="form-control" id="p_dos" name="p_dos"
                                                    placeholder="Date of Supply" />
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>



                                        <div class="col-sm-12 col-md">
                                            <h6>Date of Harvest</h6>
                                            <div class="control-group">
                                                <input type="date" class="form-control" id="p_doh" name="p_doh"
                                                    placeholder="Date of Harvest" />
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="control-group">
                                        <div class="row">
                                            <label for="image"> Upload Image</label>
                                            <div class="input-group mb-3">
                                                <!-- <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div> -->
                                                <div class="custom-file col">
                                                    <input type="file" class="form-control custom-file-input"
                                                        id="productimage" name="productimage">
                                                    <!-- <label class="custom-file-label">Choose file</label> -->
                                                </div>
                                            </div>

                                        </div>
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




    </div>
</div>