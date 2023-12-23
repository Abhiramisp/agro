<div id="layoutSidenav_content">
  <main>
    <div class="container py-5 ">
      <header class="text-center">
        <h1>Product list</h1>

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
                      <th>Product Category</th>
                      <th>Organic/Inorganic</th>
                      <th>Shelf Life</th>
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
                          <?php echo $row->product_category; ?>
                        </td>
                        <td>
                          <?php echo $row->product_type; ?>
                        </td>
                        <td>
                          <?php echo $row->shelf_life; ?>
                        </td>
                        <td>

                          <a style="margin:2px" href="<?php echo base_url() ?>"><span style="color:blue"><i
                                class="fa fa-edit" aria-hidden="true"></i></span></a>

                          <a style="margin:2px" href="<?php echo base_url() ?>"><span style="color:red"><i
                                class="fa fa-trash" aria-hidden="true"></i></span></a>

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