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
                    console.log('success');
                    
                   var html = `
                     <img style="width:100%; height:100%;" src="../ajax/temp/${response.image}" alt="">
                     <button class=" btn btn-danger rounded-0 btn-sm btn_cancle">Cancle</button>
                   `; 

                   $(".block-img").html(html);

                   $("#image").val('');
                }
            }
         });
    });

    $(document).on('click','',function () {
        
    });


</script>