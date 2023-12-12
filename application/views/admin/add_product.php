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
                                    <h3>Product Detials </h3>
                                    <div class="col-12">
                                        <div class="contact-form">
                                            <div id="success"></div>
                                            <form action="<?php echo base_url(); ?>index.php/Admin_productAdd"
                                                method="POST" enctype="multipart/form-data">

                                                <div class="form-row row">

                                                    <div class="col-sm-12">
                                                        <div class="control-group">
                                                            <input type="text" class="form-control" id="p_name"
                                                                name="p_name" placeholder="Product Name"
                                                                required="required"
                                                                data-validation-required-message="Please enter Product Name" />
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-row row">
                                                    <div class="col-sm-12">
                                                        <div class="control-group ">
                                                            <meta http-equiv="Content-Type"
                                                                content="text/html; charset=UTF-8">

                                                            <select class="form-control bg-white" id="p_categories"
                                                                name="p_categories" size="1" onchange="">
                                                                <option value="" disabled selected>Choose Category
                                                                </option>
                                                                <option default>Fruits</option>
                                                                <option value="Vegetables">Vegetables</option>
                                                                <option value="Pulse">Pulse</option>
                                                                <option value="Cereals">Cereals</option>
                                                            </select>
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="control-group">
                                                            <input type="text" class="form-control" id="p_subcat"
                                                                name="p_subcat" placeholder="Sub Category"
                                                                required="required"
                                                                data-validation-required-message="Please enter a Sub Category" />
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

                                                    <div class="col-sm-12">
                                                        <div class="control-group">
                                                            <div class="row">
                                                                <label for="" class="col-md-2   x"><b>Shelf Life:</b></label>
                                                            <input type="number" class="form-control col" id="p_slife"
                                                                name="p_slife" placeholder="Shelf Life"
                                                                required="required"
                                                                data-validation-required-message="Please enter a Shelf Life" />
                                                            <select name="" id="" class="col-2">
                                                                <option value="Days">Days</option>
                                                                <option value="Month">Month</option>
                                                                <option value="Year">Year</option>
                                                            </select>
                                                            </div>
                                                            <p class="help-block text-danger"></p>
                                                        </div>

                                                    </div>

                                                </div>


                                                <div class="control-group">
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label for="inputAddress2"> Upload Image</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">Upload</span>
                                                                </div>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input"
                                                                        id="image" name="image">
                                                                    <label class="custom-file-label">Choose
                                                                        file</label>
                                                                </div>
                                                            </div>




                                                        </div>

                                                    </div>
                                                    <p class="help-block text-danger"></p>
                                                </div>

                                                <div>
                                                    <button class="btn py-3 px-5"
                                                        style="background-color:#46c6ce; color:white;" type="reset"
                                                        id="sendMessageButton">Reset</button>
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