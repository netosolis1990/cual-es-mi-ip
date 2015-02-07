<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>NetoSolis.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="NL7 Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery-1.11.0.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'> 
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!---- start-smoth-scrolling---->
 <link rel="stylesheet" href="css/jquery.countdown.css" />
<!--/css-->
<!--js-->
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
<!--js-->
</head>
<body>
	<div class="banner banner1" id="home">
		<div class="container wrap">
			<div class="header">
				<div class="header-left">
					<a href="index.html"><img src="images/logo.png" alt=""></a>
				</div>
				<div class="header-right">
                     	<a href="http://netosolis.com">Ir a NetoSolis.com</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--banner-ends-->
	<!--comming-starts-->
	
	<!--content-->
	<div class="timer">
		<div class="content">
	<h1>TU IP ES</h1>
	<h1 id="ip"><?php 
		//Con esta parte del codigo conocemos la ip del cliente
		if(!empty($_SERVER['HTTP_CLIENT_IP']))echo $_SERVER['HTTP_CLIENT_IP'];
		else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))echo $_SERVER['HTTP_X_FORWARDED_FOR'];
		else echo $_SERVER['REMOTE_ADDR']
	?></h1>
				
					<div class="clear"> </div>
	<div class="content-bottom">
		<div class="content-form">
			
			<input type="submit" value="" id="pais">
		</div>
		<div class="content-form" id="mapa">
			
		</div>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- RectanguloGrande -->
		<ins class="adsbygoogle"
		     style="display:inline-block;width:336px;height:280px"
		     data-ad-client="ca-pub-2368321753619836"
		     data-ad-slot="5755974906"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	</div>
	<!--cooming-ends-->
	<!--footer-starts-->
	<div class="ftr">
		<div class="container">
			<div class="footer">
				
				<label> </label>
				<p>TEMPLATE BY <a href="http://w3layouts.com/"> W3LAYOUTS</a></p>
			</div>
		</div>
		 <script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--footer-ends-->



	<script>
	//Esta parte del codigo consume el webservice y muestra el mapa de google
	console.log($('#ip').html());
		$.get('http://freegeoip.net/json/'+$('#ip').html(), function(data) {
			console.log(data);
			$('#pais').val("TU PAIS: "+data.country_name);
			$('#mapa').html('<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7633185.3270517085!2d'+data.longitude+'!3d'+data.latitude+'!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2s!4v1423337994432" width="600" height="450" frameborder="0" style="border:0"></iframe>');
        });

		
	</script>
</body>
</html>