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
        
                  <tr>
                
                    <td>1</td>
                    <td>Apple</td>
                    <td>Fruit</td>
                    <td>org</td>
                    <td>5000</td>
                    <td> <div class="d-flex ">
                    <div class="me-1">
                  <form action="<?php echo base_url(); ?>index.php/Admin_editProduct" method="GET">
                <input type="hidden" name="id">
                <button class="btn btn-block btn-sm btn-gradient-primary  mx-auto" type="submit" style="width:auto;margin-bottom:22px" ><a href="fetchAuc.php? id='.$id.'"><i class="fa fa-solid fa-pen"></i></a> </button>
                </form>
                    </div> <div class="me-1">
                <form action="" method="POST">
                <input type="hidden" name="id" >
                <button class="btn btn-block btn-sm btn-gradient-danger mx-auto" type="submit" ><a href="deleteAuc.php? id='.$id.'"><i class="fa fa-solid fa-trash"></i></a> </button>
                </form></div></div>
              </td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</main>


