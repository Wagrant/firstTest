$('html').on('click', "img.test1, img.testApp", function(){
var product_id =$(this).attr("id");
           $.ajax({
            type : 'POST',
            url : '/mainPopUp',
            data: {
                'product_id': product_id,
                '_token' : $('input[name="_token"]').val()
            },
            success: function(data)
            {
                $('#modal-1').modal('show');
                $('.modal-title').html(data.product_name);
                $('.popUpImage').attr('src', "images/" + data.image_name +".jpg");
                $('.desc').html(data.description);
                $('.price').html(data.price);
                $('button#addToBasket').attr('idp', product_id);
            }
        });
    });