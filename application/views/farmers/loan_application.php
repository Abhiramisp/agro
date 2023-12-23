<div class="container-fluid py-5 mb-5 hero-header">
    <div class="container bg-white py-5">
        <h1 class="display-4">Loan Request</h1>

        <form action="<?php echo base_url(); ?>index.php/Fincial_support" method="POST" onsubmit="return validatebuyer()"
            enctype="multipart/form-data">
            <div class="container mt-5">
                <div class="form-row row">
                    <div class="form-group col-md">
                        <label for="inputEmail4">Purpose Of money</label>
                        <input type="text" class="form-control" id="purposeofmoney" name="purposeofmoney"
                            placeholder="Purpose Of money">

                    </div>

                    <div class="form-group col-md">
                        <label for="inputPassword4">Return Period</label>
                        <input type="text" class="form-control" id="returnperiod" name="returnperiod"
                            placeholder="Return Period">
                    </div>
                    <div class="form-group col-md">
                        <label for="inputPassword4">Amount</label>
                        <input type="text" class="form-control" id="amount" name="amount"
                            placeholder="Loan Amount">
                    </div>
                </div><div class="form-row ">
                    <div class="form-group col-md-6">

                        <input type="hidden" class="form-control" id="seller_id" name="seller_id" value="<?php echo $sqldata1[0]->seller_id; ?>">
                        <label for="inputPassword4">Debit from Product Value</label><br>
                        <div class=" container">
                            <input type="radio" class="mr-2" id="debitfromproduct" name="debitfromproduct"
                                value="YES">Yes <br>
                            <input type="radio" class="mr-2" id="debitfromproduct" name="debitfromproduct" value="NO">No
                            <br>
                        </div>
                    </div>

                </div>

                <div class="checkbox">
                    <label><input type="checkbox" id="acceptcond" name="acceptcond">&nbsp;&nbsp;accept terms and
                        condition</label>
                </div>



                <div class="text-center">

                    <input class="btn btn-primary col-lg-5 col-5 m-2" type="submit" value="Send Request">
                    <input class="btn  col-lg-5 col-5 m-2" type="reset" value="Reset"
                        style="background-color:#46C6CE; color:white;">
                </div>

            </div>
        </form>

    </div>
</div>