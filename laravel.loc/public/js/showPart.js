var id;
$('html').on('click', ".tested", function(){
id = $(this).attr("id");

         $.ajax({
            type : 'POST',
            url : '/categories',
            data: {
                'id':id
            },
            success: function(data)
            {
                $('div#test').html(data);
            }
        });

    });