 $('#modal-1').click("#send", function(){
     
        $.ajax({
            type : 'POST',
            url : '/classes/controller/CommentController.php',
            data: {
                'test':"vova"
            },
            success: function(data)
            {
                

            }
        });           
    });