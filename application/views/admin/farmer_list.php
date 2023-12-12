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
                <table id="example" style="width:100%" class="table table-striped table-bordered ">
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
                        <td style="padding: 0px;">
                          <div style="display: flex; gap: 5px;">
                            <form action="<?php echo base_url(); ?>index.php/Admin_editFarmer" method="GET">
                              <input type="hidden" name="id">
                              <button class="btn btn-block btn-sm btn-gradient-primary mt-4 mx-auto" type="submit"
                                style="width:auto;margin-bottom:22px"><a href="fetchAuc.php? id='.$id.'"><i
                                    class="fa fa-solid fa-pen"></i></a> </button>
                            </form>
                            <form action="" method="POST">
                              <input type="hidden" name="id">
                              <button class="btn btn-block btn-sm btn-gradient-danger mt-4 mx-auto" type="submit"><a
                                  href="deleteAuc.php? id='.$id.'"><i class="fa fa-solid fa-trash"></i></a> </button>
                            </form>
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