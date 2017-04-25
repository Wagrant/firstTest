 $('#modal-1').on('click', "#send", function(){
     
        $.ajax({
            type : 'POST',
            url : '/set_comment',
            data: {
                'comment':$("textarea[name='comment']").val()
            },
            success: function(data)
            {
                $('ul#commentRoot').prepend(data);
            }
        });           
    });

var comment_id;

  $('html').on('click', '.reply', function(){

     //comment_id = $('li.test1').attr("id");
     comment_id = $(this).parent().parent().attr("id");
     $("#replyCom").val(''),


 });

    $('html').on('click', '#replyid', function(){

     //comment_id = $(this).parent().parent().attr("id");

     $.ajax({
        type : 'POST',
        url : '/reply_comment',
        data: {
            'comment':$("textarea[name='replytext']").val(),
            'id':comment_id
        },
        success: function(data)
        {
            if($("li#"+comment_id).find('ul').length)
            {
                $('li#'+comment_id).append('<div>'+data+'</div>');
            }
            else
            {
               $('li#'+comment_id).append('<ul>'+data+'</ul>');
            }
        }
    });
 });