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
    
    
    $('.edit_category').click(function()
    {
        if ($(this).attr('id')) 
        {
            get_category_infos($(this).attr('id'));
            /*if($(this).html().indexOf('<') == -1 && $(this).html().indexOf('input') == -1 
                && $(this).html().indexOf('type') == -1  && $(this).html().indexOf('text') == -1)
            {
                $("#delete_tag_"+$(this).attr('id')).hide();
                $("#save_tag_"+$(this).attr('id')).show();
                $(this).html("<input id='"+$(this).attr('id')+"' type='text' value='"+$(this).html()+"'>");       
            }*/
        }
    });

});

function get_category_infos(cat_id)
{
    $.getJSON('/admin/get_category_info/'+cat_id+'/',{uid : String((new Date()).getTime()).replace(/\D/gi, '') },
        function(result) {
            if (result == 0)
            {
                alert('Error getting catgory infos');
            }
            else
            {   
                $('#form').show();
                $('#category_name').val(result['category_name']);
                $('#category_active').attr('checked', (result['category_active'] == 1));
                $('#parent_category').val(result['category_parent_id']);
                $('#category_id').val(cat_id);
                $('.category_opt').show();
                $('#cat_'+cat_id).hide();
            }
        }
    );
}

function save_category_infos()
{
    //~ var category = {};
    //~ category.title = $('#category_name').val();
    //~ category.active = $('#category_active').attr('checked');
    //~ category.parent = $('#parent_category').val();
    //~ alert(category);
    var cat_id = $('#category_id').val();
    $.getJSON('/admin/save_category_info/'+cat_id+'/'+$('#category_name').val()+'/'+$('#category_active').attr('checked')+'/'+$('#parent_category').val()+'/',
                {uid : String((new Date()).getTime()).replace(/\D/gi, '') },
        function(result) {
            if (result == 0)
            {
                alert('Error getting catgory infos');
            }            
        }
    );
}

function edit_category(id)
{
    get_category_infos(id);
}

function edit_comment(id)
{
    
}

