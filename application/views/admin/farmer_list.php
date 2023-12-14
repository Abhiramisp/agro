<div id="layoutSidenav_content">
  <main>
    <div class="container py-5 ">
      <header class="text-center">
        <h1>Farmer list</h1>

      </header>
      <div class="row py-5 align-items-center justify-content-center">
        <div class="col-lg-10 mx-auto">
          <div class="card rounded shadow border-0">
            <div class="card-body p-5 bg-white rounded">
              <div class="table-responsive ">
                <table id="example" style="width:100%" class="table table-striped stripe table-bordered order-column ">
                  <thead>
                    <tr>
                      <th>Sl.no</th>
                      <th> Name</th>
                      <th>Mobile</th>
                      <th>Email</th>
                      <th>Address</th>
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
                          <?php echo $row->seller_email; ?>
                        </td>
                        <td>
                          <?php echo $row->seller_taluk . $row->seller_city . $row->seller_state ?>
                        </td>
                        <td>

                        <a style="margin:2px"
                            href="<?php echo base_url() . "index.php/Admin_editFarmer/index/" . urldecode($row->seller_id); ?>"><span
                              style="color:blue"><i class="fa fa-edit" aria-hidden="true"></i></span></a>

                          <a style="margin:2px"
                            href="<?php echo base_url() . "index.php/Admin_farmerList/delete_seller/" . urldecode($row->seller_id); ?>"><span
                              style="color:red"><i class="fa fa-trash" aria-hidden="true"></i></span></a>

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