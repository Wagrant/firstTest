var product_id;

$('html').on('click', "img.test1", function(){
 product_id =$(this).attr("id");

          $.ajax({
            type : 'POST',
            url : '/mainPopUp',
            data: {
                'product_id':product_id
            },
            success: function(data)
            {

            }
        });

    });