<?php include "../layout/header.php" ?>
<main id="main" class="main">
     <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <!-- Top Selling -->
     <?php include "../message/modal-add.php" ?>
    <div class="col-12">
        <div class="card top-selling overflow-auto">
            <div class="card-body pb-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Top Selling <span>| Today</span></h5>
                    <button data-bs-toggle="modal" data-bs-target="#ModalAdd" class=" btn btn-primary btn-sm rounded-0">add more</button>
                </div>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">Preview</th>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Sold</th>
                            <th scope="col">Revenue</th>
                        </tr>
                    </thead>
                    <tbody id="tb_data">
                        
                    </tbody>
                </table>
         
            </div>

        </div>
    </div>
    <!-- End Top Selling -->
</main>
<?php include "../layout/footer.php" ?>