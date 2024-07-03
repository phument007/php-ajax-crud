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
    <?php include "../message/modal-del.php" ?>
    <div class="col-12">
        <div class="card top-selling overflow-auto">
            <div class="card-body pb-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Top Selling <span>| Today</span></h5>
                    <button data-bs-toggle="modal" data-bs-target="#ModalAdd" class=" btn btn-primary btn-sm rounded-0 btn_addMore">add<i class="bi bi-plus-circle"></i></button>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <button class=" btn btn-danger btn-sm rounded-0 btn_reset_product">Reset</button>
                    <input class="w-25 form-control shadow-none" type="search" name="" id="search_product" placeholder="search here..">
                </div>
                <div class="table_products">

                </div>
                
         
            </div>

        </div>
    </div>
    <!-- End Top Selling -->
</main>
<?php include "../layout/footer.php" ?>