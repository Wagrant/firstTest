 $(html).on('click', '#helms' function(){
     
        $.ajax({
            type : 'POST',
            url : '/helms',
            data: data
            success: function(data)
            {
                $('#helms').html(data);
            }
        });
    });