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
                    <tbody>
                        <tr>
                            <th scope="row"><a href="#"><img style="width:100px; height: 100px;"
                                        src="../assets/img/product-1.jpg" alt=""></a></th>
                            <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                            <td>$64</td>
                            <td class="fw-bold">124</td>
                            <td>$5,828</td>
                        </tr>
                        <tr>
                            <th scope="row"><a href="#"><img style="width:100px; height: 100px;"
                                        src="../assets/img/product-2.jpg" alt=""></a></th>
                            <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                            <td>$46</td>
                            <td class="fw-bold">98</td>
                            <td>$4,508</td>
                        </tr>
                        <tr>
                            <th scope="row"><a href="#"><img style="width:100px; height: 100px;"
                                        src="../assets/img/product-3.jpg" alt=""></a></th>
                            <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                            <td>$59</td>
                            <td class="fw-bold">74</td>
                            <td>$4,366</td>
                        </tr>
                        <tr>
                            <th scope="row"><a href="#"><img style="width:100px; height: 100px;"
                                        src="../assets/img/product-4.jpg" alt=""></a></th>
                            <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                            <td>$32</td>
                            <td class="fw-bold">63</td>
                            <td>$2,016</td>
                        </tr>
                        <tr>
                            <th scope="row"><a href="#"><img style="width:100px; height: 100px;"
                                        src="../assets/img/product-5.jpg" alt=""></a></th>
                            <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                            <td>$79</td>
                            <td class="fw-bold">41</td>
                            <td>$3,239</td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
    <!-- End Top Selling -->
</main>
<?php include "../layout/footer.php" ?>