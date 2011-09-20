<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>MyCMS - Admin</title>


<?if (isset($stylesheet)):?>
    <?foreach ($stylesheet as $css):?>
        <link rel="stylesheet" media="screen" href="<?=$css?>" />
    <?endforeach?>
<?endif?>

<link rel="stylesheet" media="screen" href="<?=base_url()?>public/css/reset.css" />
<link rel="stylesheet" media="screen" href="<?=base_url()?>public/css/grid.css" />
<link rel="stylesheet" media="screen" href="<?=base_url()?>public/css/style.css" />
<link rel="stylesheet" media="screen" href="<?=base_url()?>public/css/messages.css" />
<link rel="stylesheet" media="screen" href="<?=base_url()?>public/css/forms.css" />

<!--[if lt IE 8]>
<link rel="stylesheet" media="screen" href="<?=base_url()?>public/css/ie.css" />
<![endif]-->

<!-- jquerytools -->
<script src="<?=base_url()?>public/js/jquery.tools.min.js"></script>

<script type="text/javascript" src="<?=base_url()?>public/js/global.js"></script>

<?if (isset($javascript)):?>
    <?foreach ($javascript as $js):?>
        <script type="text/javascript" src="<?=$js?>"></script>
    <?endforeach?> 
    <script type="text/javascript">
    $(document).ready(function() {
        $("#post_content").cleditor({
            width:        750,
            height:       400
        });
        
        /*var opts = {
            cssClass : 'el-rte',
            width   : 750,
            height   : 400,           
            cssfiles : ['css/elrte-inner.css']
        }
        $('#newpost').elrte(opts);*/
        
        var triggers = $(".modalInput").overlay({

        // some mask tweaks suitable for modal dialogs
        mask: {
            color: '#ebecff',
            loadSpeed: 200,
            opacity: 0.7
        },

        closeOnClick: false
        });

        $("#prompt form").submit(function(e) {

            // close the overlay
            triggers.eq(2).overlay().close();

            // get user input
            var input = $("input", this).val();

            // do something with the answer
            if (input) triggers.eq(2).html(input);

            // do not submit the form
            return e.preventDefault();
        });
    });    
    </script>
<?endif?>

<!--[if lt IE 9]>
<script type="text/javascript" src="<?=base_url()?>public/js/html5.js"></script>
<script type="text/javascript" src="<?=base_url()?>public/js/PIE.js"></script>
<script type="text/javascript" src="<?=base_url()?>public/js/IE9.js"></script>
<script type="text/javascript" src="<?=base_url()?>public/js/ie.js"></script>
<![endif]-->

</head>
