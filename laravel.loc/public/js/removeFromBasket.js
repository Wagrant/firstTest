var product_idr;
var test;
$('html').on('click', "a.ico-del", function(){
product_idr = $(this).attr("id");
test = $(this).parent().parent().attr("id");

         $.ajax({
            type : 'POST',
            url : '/removeProduct',
            data: {
                'product_idr':product_idr,
                'test':test
            },
            success: function(data)
            {
                $("tr#" + test).hide(1000);
            }
        });

    });