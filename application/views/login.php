<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>MyCMS - Login</title>

<link rel="stylesheet" media="screen" href="<?=base_url()?>public/css/reset.css" />
<link rel="stylesheet" media="screen" href="<?=base_url()?>public/css/grid.css" />
<link rel="stylesheet" media="screen" href="<?=base_url()?>public/css/style.css" />
<link rel="stylesheet" media="screen" href="<?=base_url()?>public/css/messages.css" />
<link rel="stylesheet" media="screen" href="<?=base_url()?>public/css/forms.css" />

<!--[if lt IE 9]>
<script src="<?=base_url()?>public/js/html5.js"></script>
<script src="<?=base_url()?>public/js/PIE.js"></script>
<![endif]-->
<!-- jquerytools -->
<script src="<?=base_url()?>public/js/jquery.tools.min.js"></script>
<script src="<?=base_url()?>public/js/jquery.ui.min.js"></script>

<!--[if lte IE 9]>
<link rel="stylesheet" media="screen" href="<?=base_url()?>public/css/ie.css" />
<script type="text/javascript" src="<?=base_url()?>public/js/ie.js"></script>
<![endif]-->

<script src="<?=base_url()?>public/js/global.js"></script>


<script> 
$(document).ready(function(){
    $.tools.validator.fn("#username", function(input, value) {
        return value!='Username' ? true : {     
            en: "Please complete this mandatory field"
        };
    });
    
    $.tools.validator.fn("#password", function(input, value) {
        return value!='Password' ? true : {     
            en: "Please complete this mandatory field"
        };
    });

    $("#form").validator({ 
    	position: 'top', 
    	offset: [25, 10],
    	messageClass:'form-error',
    	message: '<div><em/></div>' // em element is the arrow
    }).attr('novalidate', 'novalidate');
});
</script> 


</head>
<body class="login">
    <div class="login-box main-content">
      <header><h2>MyCMS Login</h2></header>
    	<section>
    		<div class="message info">Enter your username and password and press Login</div>
    		<form id="form" action="<?=base_url()?>login/userloginaction/" method="post" class="clearfix">
			<p>
				<input type="text" id="username"  class="full" value="" name="username" required="required" placeholder="Username" />
			</p>
			<p>
				<input type="password" id="password" class="full" value="" name="password" required="required" placeholder="Password" />
			</p>
			<p class="clearfix">
				<span class="fl">
					<input type="checkbox" id="remember" class="" value="1" name="remember"/>
					<label class="choice" for="remember">Remember me</label>
				</span>

				<button class="button button-gray fr" type="submit">Login</button>
			</p>
		</form>
		<ul><li><strong>HELP!</strong>&nbsp;<a href="#">I forgot my password!</a></li></ul>
    	</section>
    </div>
</body>
</html>
