<div id="layoutSidenav_content">
    <main>
        <div class="container py-5 ">
            <header class="text-center text-white">
                <h1 class="display-4">Loan Application</h1>

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
                                            <th>Farmer Name</th>
                                            <th>Mobile</th>
                                            <th>Amount</th>
                                            <th>Time Period</th>
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
                                                    <?php echo $row->seller_name; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->seller_number; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->loan_amount; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->return_period;  ?>
                                                </td>
                                                <td>
                                                    <div class="d-flex ">
                                                        <div class="me-1">
                                                            <form
                                                                action="<?php echo base_url(); ?>index.php/Admin_loanApprove"
                                                                method="GET">
                                                                <input type="hidden" name="id">
                                                                <button class="btn" type="submit"><a
                                                                        href="<?php echo base_url(); ?>index.php/Admin_loanApprove? id='.$id.'">Approve</button>
                                                            </form>
                                                        </div>
                                                        <div class="me-1">
                                                            <form action="<?php echo base_url(); ?>index.php/" method="GET">
                                                                <input type="hidden" name="id">
                                                                <button class="btn" type="submit"><a
                                                                        href="fetchAuc.php? id='.$id.'">Reject</button>
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
    </main>