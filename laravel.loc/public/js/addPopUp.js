var product_idu;
$('html ').on('click', "button#add", function(){
 product_idu = $(this).attr("test");

         $.ajax({
            type : 'POST',
            url : '/addPopProduct',
            data: {
                'product_idu':product_idu
            },
            success: function(data)
            {
                alert('Product added in cart');
            }
        });

    });