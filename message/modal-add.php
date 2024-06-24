
<!-- Modal -->
<div class="modal fade" id="ModalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div style="max-width: 50%;" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Saling</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="formAdd" method="POST" enctype="multipart/form-data"> 
      <div class="modal-body">
         <div class="row">
             <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class=" form-control shadow-none" name="name" id="name">
                </div>
                <div class="form-group mt-4">
                    <label for="price">Product Price</label>
                    <input type="text" class=" form-control shadow-none" name="price" id="price">
                </div>
                <div class="form-group mt-4">
                    <label for="qty">Product Qty</label>
                    <input type="text" class=" form-control shadow-none" name="qty" id="qty">
                </div>
             </div>

             <div class="col-md-6">
                <div class="form-group">
                    <input type="hidden" name="" id="response_img">
                    <label for="image">Product Image</label>
                    <input type="file" class=" form-control shadow-none" name="image" id="image">
                    <button type="button" class=" btn btn-info rounded-0" id="btn_upload">upload</button>
                </div>
                <div class="block-img">

                </div>
             </div>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>