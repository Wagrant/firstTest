var product_idr;
$('html').on('click', "a.ico-del", function(){
product_idr = $(".ico-del").attr("id");

         $.ajax({
            type : 'POST',
            url : '/removeProduct',
            data: {
                'product_idr':product_idr
            },
            success: function(data)
            {
                $("tr.test").hide();
                alert('Product deleted from basket');
            }
        });

    });