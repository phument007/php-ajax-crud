<script>

    function select(){
        $.ajax({
            type: "GET",
            url: "../ajax/products/select.php",
            success: function (response) {
                $("#tb_data").html(response);
            }
        });
    }
    select();

    //Upload file
    $(document).on('click','#btn_upload',function () {
         let allData = new FormData($("#formAdd")[0]);
         $.ajax({
            type: "POST",
            url: "../ajax/products/upload-file.php",
            data: allData,
            dataType: "json",
            contentType: false,
            processData: false,
            success: function (response) {
                if(response.status == 200){
                  
                   var html = `
                     <img style="width:100%; height:100%;" src="../ajax/temp/${response.image}" alt="">
                     <button type="button" onclick="Cancle(${response.id})" class=" btn btn-danger rounded-0 btn-sm btn_cancle">Cancle</button>
                   `; 

                   $(".block-img").html(html);
                   $("#response_id_img").val(response.id);
                   $("#image").val('');
                }
            }
         });
    });

    //Cancle Function
    function Cancle(id){
        $.ajax({
            type: "POST",
            url: "../ajax/products/cancle-img.php",
            data: {
                ID : id,
            },
            dataType: "json",
            success: function (response) {
                if(response.status == 200){
                      $(".block-img").html('');
                }
            }
        });
    }
     
    // Event for insert product
    $(document).on('submit','#formAdd',function (e) {
        e.preventDefault();
        let allData = new FormData($(this)[0]);
        $.ajax({
            type: "POST",
            url: "../ajax/products/store.php",
            data: allData,
            dataType: "json",
            contentType:false,
            processData:false,
            success: function (response) {
                if(response.status  == 200 ){
                    $("#formAdd").trigger('reset');
                     $(".block-img").html('');
                     $("#ModalAdd").modal('hide');
                     select();
                }
            }
        });
    });


</script>