<div class="container-fluid py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="container py-5 ">
            <header class="text-center text-white">
                <h1 class="display-4">Product list</h1>

            </header>
            <div class="row py-5 align-items-center justify-content-center">
                <div class="col-lg-10 mx-auto">
                    <div class="card rounded shadow border-0">
                        <div class="card-body p-5 bg-white rounded">
                            <div class="table-responsive ">
                                <table id="example" style="width:100%" class="table table-striped table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>Sl.no</th>
                                            <th>Product Name</th>
                                            <th>Product type</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $count = 1;
                                        foreach ($sqldata1 as $row) { ?>
                                            <tr>

                                                <td>
                                                    <?php echo $count; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->product_name; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->product_type; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->product_quantity; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->product_price; ?>
                                                </td>
                                                <td>
                                                    <div class="d-flex ">
                                                        <div class="me-1">
                                                            <form
                                                                action="<?php echo base_url(); ?>index.php/Admin_editProduct"
                                                                method="GET">
                                                                <input type="hidden" name="id">
                                                                <button
                                                                    class="btn btn-block btn-sm btn-gradient-primary  mx-auto"
                                                                    type="submit" style="width:auto;margin-bottom:22px"><a
                                                                        href="fetchAuc.php? id='.$id.'">Update</a> </button>
                                                            </form>
                                                        </div>
                                                        <div class="me-1">
                                                            <form action="" method="POST">
                                                                <input type="hidden" name="id">
                                                                <button
                                                                    class="btn btn-block btn-sm btn-gradient-danger  mx-auto"
                                                                    type="submit"><a href="deleteAuc.php? id='.$id.'"><i
                                                                            class="fa fa-solid fa-trash"></i></a> </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $count++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>