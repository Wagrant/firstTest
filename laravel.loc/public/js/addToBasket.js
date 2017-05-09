var product_id;
$('html').on('click', "#addToBasket", function(){
 product_id = $(this).attr("idp");

         $.ajax({
            type : 'POST',
            url : '/addProduct',
            data: {
                'product_id':product_id,
                '_token' : $('input[name="_token"]').val()
            },
            success: function(data)
            {
                $('#modal-2').modal('show');
            }
        });

    });