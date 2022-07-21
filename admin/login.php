<?php

$mainurl="http://localhost/trendzproject/admin/";
$baseurl="http://localhost/trendzproject/admin/assets/";

// $mainurl="http://trendzshopp.byethost3.com/admin";
// $baseurl="http://trendzshopp.byethost3.com/admin/assets/";

?>

<!DOCTYPE html>
<head>
<title>Trendz Shopping Admin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo $baseurl;?>css/bootstrap.min.css" >
<link rel="stylesheet" href="<?php echo $baseurl;?>css/gray.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo $baseurl;?>css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo $baseurl;?>css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo $baseurl;?>css/font.css" type="text/css"/>
<link href="<?php echo $baseurl;?>css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="<?php echo $baseurl;?>js/jquery2.0.3.min.js"></script>
<script src="<?php echo $baseurl;?>js/jquery.bvalidator.min.js"></script>
<script src="<?php echo $baseurl;?>js/default.min.js"></script>
<script src="<?php echo $baseurl;?>js/gray.js"></script>
<script type="text/javascript">

$(document).ready(function(){

$("#frm").bValidator();

});

</script>

</head>
<body>
<div class="log-w3">
<div class="w3layouts-main" style="width:80%; height:400px">

    <div class="col-md-5">
        <img src="<?php echo $baseurl;?>images/trendz.png" style="width:100%; height:300px">
    </div>

    <div class="col-md-7">
	<h2>Trendz Admin Login</h2>
		<form action="#" method="post" id="frm">
			<input type="text" class="ggg" name="Email" placeholder="E-MAIL" data-bvalidator="required,email">
			<input type="password" class="ggg" name="Password" placeholder="PASSWORD" data-bvalidator="required,minlen[3],maxlen[10]">
			<span><input type="checkbox" />Remember Me</span>
			<h6><a href="<?php echo $mainurl;?>ForgetPassword">Forgot Password?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
</div>
</div>
</div>
<script src="<?php echo $baseurl;?>js/bootstrap.js"></script>
<script src="<?php echo $baseurl;?>js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo $baseurl;?>js/scripts.js"></script>
<script src="<?php echo $baseurl;?>js/jquery.slimscroll.js"></script>
<script src="<?php echo $baseurl;?>js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?php echo $baseurl;?>js/jquery.scrollTo.js"></script>
</body>
</html>
