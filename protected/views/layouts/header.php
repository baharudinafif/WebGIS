<?php /* @var $this Controller */ 
	date_default_timezone_set("Asia/Jakarta");
	$basedir =  Yii::app()->request->baseUrl;
?>
<!DOCTYPE HTML>
<!-- START OF HEADER-->
<html>
	<head>
		<title>GunungKu</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $basedir;?>/css/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> 
			addEventListener("load", function() { 
				setTimeout(hideURLbar, 0); 
			}, false); 
			function hideURLbar(){ 
				window.scrollTo(0,1); 
			} 
		</script>
		<script src="<?php echo $basedir;?>/js/jquery.min.js"></script>
		<!---script---->
		<link rel="stylesheet" href="<?php echo $basedir;?>/css/jquery.bxslider.css" type="text/css" />
		<script src="<?php echo $basedir;?>/js/jquery.bxslider.js"></script>
			<script type="text/javascript">
				$(document).ready(function(){
					$('.bxslider').bxSlider({
						 auto: true,
 						 autoControls: true,
						 minSlides: 4,
						 maxSlides: 4,
						 slideWidth:450,
						 slideMargin: 10
					});
				});
			</script>
		<!---//script---->
		<!---smoth-scrolling---->
			<script type="text/javascript">
				$(document).ready(function(){
									$('a[href^="#"]').on('click',function (e) {
									    e.preventDefault();
									    var target = this.hash,
									    $target = $(target);
									    $('html, body').stop().animate({
									        'scrollTop': $target.offset().top
									    }, 1000, 'swing', function () {
									        window.location.hash = target;
									    });
									});
								});
				</script>
		<!---//smoth-scrolling---->
		<!----start-top-nav-script---->
		<script type="text/javascript" src="<?php echo $basedir;?>/js/flexy-menu.js"></script>
		<script type="text/javascript">$(document).ready(function(){$(".flexy-menu").flexymenu({speed: 400,type: "horizontal",align: "right"});});</script>
		<!----//End-top-nav-script---->
		<!---webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!---webfonts---->
		<!--start slider -->
	    <link rel="stylesheet" href="<?php echo $basedir;?>/css/fwslider.css" media="all">
		<script src="<?php echo $basedir;?>/js/jquery-ui.min.js"></script>
		<script src="<?php echo $basedir;?>/js/css3-mediaqueries.js"></script>
		<script src="<?php echo $basedir;?>/js/fwslider.js"></script>
		<!--end slider -->
		<!---calender-style---->
		<link rel="stylesheet" href="<?php echo $basedir;?>/css/jquery-ui.css" />
		<!---//calender-style---->
	</head>
<!-- END OF HEADER-->

<!-- START OF BODY -->
	<body>
