 $('#modal-1').on('click', "#send", function(){
     
        $.ajax({
            type : 'POST',
            url : '/set_comment',
            data: {
                'comment':$("textarea[name='comment']").val()
            },
            success: function(data)
            {
                $('div#comments-logout').last().prepend(data);

            }
        });           
    });