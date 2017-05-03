var product_id;
$('html').on('click', "#addToBasket", function(){
 product_id = $(this).attr("idp");

         $.ajax({
            type : 'POST',
            url : '/addProduct',
            data: {
                'product_id':product_id
            },
            success: function(data)
            {
                alert('Product added in basket');
            }
        });

    });