$(document).ready(function() {
    if ($('#reset'))
    {
        $('#reset').bind('click', function() {
            window.location.replace(window.location.pathname);
        });
    }
    
    if ($('#display_message'))
    {
        $("#display_message").delay(800).slideUp(1000).delay(800).hide(400);
    }

    if ($('#add_category_button'))
    {
        $('#add_category_button').bind('click', function() {
            var tag_name = $('#post_new_category').val();
            $.get("/admin/add_category/"+tag_name+'/',{uid : String((new Date()).getTime()).replace(/\D/gi, '') },
                function(result) {
                    if (result == 0)
                    {
                        alert('Error adding new catgory');
                    }
                    else
                    {                        
                        $('#post_categories').append($("<option></option>").attr("value",result).text(tag_name));
                    }
                }
            );
        });
    }

    $('.editable').click(function()
    {
        if ($(this).attr('id')) 
        {
            if($(this).html().indexOf('<') == -1 && $(this).html().indexOf('input') == -1 
                && $(this).html().indexOf('type') == -1  && $(this).html().indexOf('text') == -1)
            {
                $("#delete_tag_"+$(this).attr('id')).hide();
                $("#save_tag_"+$(this).attr('id')).show();
                $(this).html("<input id='"+$(this).attr('id')+"' type='text' value='"+$(this).html()+"'>");       
            }
        }
    });

});

function edit_item(id)
{
    if($('#'+id).html().indexOf('input') == -1)
    {
        $('#'+id).html("<input id='"+id+"' type='text' value='"+$('#'+id).html()+"'>");
    }    
}

