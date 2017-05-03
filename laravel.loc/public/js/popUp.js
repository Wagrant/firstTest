$('html').on('click', "img.test1", function(){
var product_id =$(this).attr("id");

           $.ajax({
            type : 'POST',
            url : '/mainPopUp',
            data: {
                'product_id': product_id
            },
            success: function(data)
            {
                $('h4.modal-title').html(data.product_name);
                $('.popUpImage').attr('src', "images/" + data.image_name +".jpg");
                $('p.desc').html(data.description);
                $('h4.price').html(data.price);
                $('button#add').attr('test', product_id);
            }
        });

    });