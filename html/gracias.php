<?php 
if(isset($_POST['submit'])){
    $to = "manolo@digitalhunting.es"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Formulario digitalhunting";
    $subject2 = "Copia de tu formulario digitalhunting";
    $message = $first_name . " " . $last_name . " Escribió:" . "\n\n" . $_POST['message'];
    $message2 = "Esta es una copia de tu mensaje " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header('Location: gracias.php');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!DOCTYPE html>
<!--[if IE 8]>    <html class="ie8 legacy-ie no-js" lang="es"  itemscope itemtype="http://schema.org/Organization"> <![endif]-->
<!--[if IE 9]>    <html class="ie9 legacy-ie no-js" lang="es"  itemscope itemtype="http://schema.org/Organization"><![endif]-->
<!--[if !IE]><!--> <html class="no-legacy-ie no-js" lang="es"  itemscope itemtype="http://schema.org/Organization"> <!--<![endif]-->
    <head>
	    
		<!-- Precargas en primera visita - producción
		<link rel="prefetch" href="js/critical.js">
		 -->
		
	    
        <meta charset="utf-8">

		<!--[if IE]>        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<![endif]-->
		
        <title></title>
        <meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="flyingpigs.es">
		
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<meta name="format-detection" content="telephone=no">
		
		
		<!-- IE Clearfix -->
		<!--[if IE]>
			<meta http-equiv="cleartype" content="on">
		<![endif]-->
		
		
		<!-- Mobile app -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="apple-touch-startup-image" href="img/splash.png">
		<meta name="mobile-web-app-capable" content="yes">
		<!-- /Mobile app -->
		
		<!-- App -->
		<meta name="apple-itunes-app" content="app-id=myAppStoreID, affiliate-data=myAffiliateData, app-argument=myURL">
		<meta name="google-play-app" content="app-id=googleAppID">
		<!-- /App -->
		
		<!-- CSS -->	

		
		<!-- Código Desarrollo: -->
		
		<link rel="stylesheet" type="text/css" href="css/styles.min.css">
		<link rel="stylesheet" type="text/css" href="css/styles2.css">
		
		<script src="js/critical.js"></script>
		
	    <!-- Grunticon -->
	    
		<script>

			(function(e){function t(t,n,r,o){"use strict";function a(){for(var e,n=0;u.length>n;n++)u[n].href&&u[n].href.indexOf(t)>-1&&(e=!0);e?i.media=r||"all":setTimeout(a)}var i=e.document.createElement("link"),c=n||e.document.getElementsByTagName("script")[0],u=e.document.styleSheets;return i.rel="stylesheet",i.href=t,i.media="only x",i.onload=o||function(){},c.parentNode.insertBefore(i,c),a(),i}var n=function(r,o){"use strict";if(r&&3===r.length){var a=e.navigator,i=e.Image,c=!(!document.createElementNS||!document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect||!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1")||e.opera&&-1===a.userAgent.indexOf("Chrome")||-1!==a.userAgent.indexOf("Series40")),u=new i;u.onerror=function(){n.method="png",n.href=r[2],t(r[2])},u.onload=function(){var e=1===u.width&&1===u.height,a=r[e&&c?0:e?1:2];n.method=e&&c?"svg":e?"datapng":"png",n.href=a,t(a,null,null,o)},u.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==",document.documentElement.className+=" grunticon"}};n.loadCSS=t,e.grunticon=n})(this);(function(e,t){"use strict";var n=t.document,r="grunticon:",o=function(e){if(n.attachEvent?"complete"===n.readyState:"loading"!==n.readyState)e();else{var t=!1;n.addEventListener("readystatechange",function(){t||(t=!0,e())},!1)}},a=function(e){return t.document.querySelector('link[href$="'+e+'"]')},c=function(e){var t,n,o,a,c,i,u={};if(t=e.sheet,!t)return u;n=t.cssRules?t.cssRules:t.rules;for(var s=0;n.length>s;s++)o=n[s].cssText,a=r+n[s].selectorText,c=o.split(");")[0].match(/US\-ASCII\,([^"']+)/),c&&c[1]&&(i=decodeURIComponent(c[1]),u[a]=i);return u},i=function(e){var t,o,a;o="data-grunticon-embed";for(var c in e)if(a=c.slice(r.length),t=n.querySelectorAll(a+"["+o+"]"),t.length)for(var i=0;t.length>i;i++)t[i].innerHTML=e[c],t[i].style.backgroundImage="none",t[i].removeAttribute(o);return t},u=function(t){"svg"===e.method&&o(function(){i(c(a(e.href))),"function"==typeof t&&t()})};e.embedIcons=i,e.getCSS=a,e.getIcons=c,e.ready=o,e.svgLoadedCallback=u,e.embedSVG=u})(grunticon,this);

		
			grunticon(["css/grunticon/icons.data.svg.css",
					   "css/grunticon/icons.data.png.css",
					   "css/grunticon/icons.fallback.css"],
					   grunticon.svgLoadedCallback );
		</script>
	    <!-- / Grunticon -->
			
			
        <!-- favicon -->
		<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="img/favicons/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="img/favicons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="img/favicons/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="img/favicons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="img/favicons/mstile-144x144.png">
		<meta name="theme-color" content="#0079c8">
		<!-- /favicon -->
		
		<!-- OpenGraph -->
		<meta property="og:image" content="img/icons/favicon-192x192.png" />
		<meta property="og:title" content=""/>
		<meta property="og:site_name" content="flyingpigs.es"/>
		<meta property="og:description" content="" />
		<meta property="og:url" content="" />
		<meta property="og:type" content="website" />	
		<!-- /OpenGraph -->
		
		<!-- Twitter Card -->
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@flickr" />
		<meta name="twitter:title" content="" />
		<meta name="twitter:description" content="" />
		<meta name="twitter:image:src" content="img/icons/favicon-192x192.png" />
		<meta name="twitter:url" content="" />		
		<meta itemprop="name" content="">
		<meta itemprop="description" content="">
		<meta itemprop="image" content="img/icons/favicon-192x192.png">
		<!-- /Twitter Card -->
		
		
		<link rel="alternate" hreflang="en" href="/" />		

		<!-- HTML5 IE8 -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- /HTML5 IE8 -->
		
    </head>
    <body data-spy="scroll" data-target="main">    
    
    
  

		<!-- Contenido empieza aqui - RESPETAR LA TABULACION -->
		
		<main class="wrapper public" role="main">
			
			<section id="home" class="home in">

				<div class="block-screen" data-background="img/img-home.jpg">
					
					<div class="text-center block-translateY">
					
						<h1 class="h1 text-color-white"><strong class="text-color-secondary">Gracias</strong></h1>
						<h2 class="h3 text-color-white">Muy pronto nos pondremos en contacto contigo.</h2>
					
					</div>
				</div>
								

			</section>
		</main>

    
    
    
    <script async src="js/async.js"></script>
	  	

	    
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
	
	
		$('[data-id-scroll]').on('click',function(){

			//ID del elemento donde queremos ir
			scrollToID = $(this).attr('data-id-scroll');
			
			
			//movemos scroll
			moveToOffset = $('#'+scrollToID).offset();
			$("html, body").animate({scrollTop: moveToOffset.top - 90, useTranslate3d:true }, 700);			
			$('.navbar-toggle.right').removeClass('clicked');
			$('#off-canvas-right').removeClass('visible');
				
		});



		$('.navbar-toggle.right').on('click',function(){
			//$(this).toggleClass('clicked');
			$('#off-canvas-right').toggleClass('visible');
				
		});


		
		
	
</script>
