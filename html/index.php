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
    <body>    
    
    		<!-- INICIO off-canvas mobile -->
		<div class="canvas-wrap"></div>
		<nav id="off-canvas-left" data-side="left" class="navmenu navmenu-default navmenu-fixed-left off-canvas visible-xs" role="navigation">
		
			<div class="inner-nav">
					
				<ul class="list-unstyled">
					<li><button type="button" class="link" data-id-scroll="#favicon">Favicon</button></li>
					<li><button type="button" class="link" data-id-scroll="#colours">Colores</button></li>
					<li><button type="button" class="link" data-id-scroll="#tipography">Tipografía</button></li>
					<li><button type="button" class="link" data-id-scroll="#lists">Listas</button></li>
					<li><button type="button" class="link" data-id-scroll="#tables">Tablas</button></li>
					<li><button type="button" class="link" data-id-scroll="#forms">Formularios</button></li>
					<li><button type="button" class="link" data-id-scroll="#alerts">Alertas</button></li>
					<li><button type="button" class="link" data-id-scroll="#dropdowns">Dropdowns</button></li>
					<li><button type="button" class="link" data-id-scroll="#links">Links</button></li>
					<li><button type="button" class="link" data-id-scroll="#buttons">Botones</button></li>
					<li><button type="button" class="link" data-id-scroll="#modals">Modales</button></li>
					<li><button type="button" class="link" data-id-scroll="#tabs">Tabs</button></li>
					<li><button type="button" class="link" data-id-scroll="#tooltips">Tooltips & Pop Overs</button></li>
					<li><button type="button" class="link" data-id-scroll="#breadcrumb">Breadcrumb</button></li>
					<li><button type="button" class="link" data-id-scroll="#breadcrumb">Paginación</button></li>
					<li><button type="button" class="link" data-id-scroll="#progress">Barras de progreso</button></li>
					<li><button type="button" class="link" data-id-scroll="#icons">Iconos</button></li>
					<li><button type="button" class="link" data-id-scroll="#accordion">Desplegables</button></li>									
					<li><button type="button" class="link" data-id-scroll="#helpers">Helpers</button></li>									
				</ul>
	
			</div>
			
		</nav>
		<!-- FIN off-canvas mobile -->

    		<!-- INICIO off-canvas mobile -->

		<nav id="off-canvas-right" data-side="right" class="navmenu navmenu-default navmenu-fixed-left off-canvas visible-xs" role="navigation">
		
			<div class="inner-nav">
					
				<ul class="list-unstyled">
					<li><a href="#" data-id-scroll="home" data-pixel-fix="0">HOME</a></li>
					<li><a href="#" data-id-scroll="hacemos" data-pixel-fix="0">QUE HACEMOS</a></li>
					<li><a href="#" data-id-scroll="equipo" data-pixel-fix="0">EQUIPO</a></li>
					<li><a href="#" data-id-scroll="clientes" data-pixel-fix="0">CLIENTES</a></li>
					<li><a href="#" data-id-scroll="contacto" data-pixel-fix="0">CONTACTO</a></li>
					<li class="text-color-white">||</li>
					<li><a href="index_en.php">ENGLISH</a></li>

				</ul>
	
			</div>
			
		</nav>
		<!-- FIN off-canvas mobile -->

    		<header id="header" data-spy="affix" data-offset-top="0">
			
			<div class="container">
				
				
				<!-- <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-side="left" data-target="#off-canvas-left" data-canvas="body">
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="title">LEFT</span>
				</button> -->
				<div class="row">
					<div class="col-sm-3">
						<a href="#" class="">
							<h2 class="logo">DIGITALHUNTING</h2>
						</a>
					</div>
					<div class="col-sm-9 text-right">
						<nav class="navbar-left">
						
							<ul class="list-unstyled list-inline">
								<li><a href="#" data-id-scroll="home" data-pixel-fix="0">HOME</a></li>
								<li><a href="#" data-id-scroll="hacemos" data-pixel-fix="0">QUE HACEMOS</a></li>
								<li><a href="#" data-id-scroll="equipo" data-pixel-fix="0">EQUIPO</a></li>
								<li><a href="#" data-id-scroll="clientes" data-pixel-fix="0">CLIENTES</a></li>
								<li><a href="#" data-id-scroll="contacto" data-pixel-fix="0">CONTACTO</a></li>
								<li class="text-color-white">||</li>
								<li><a href="index_en.php">ENGLISH</a></li>

							</ul>

						</nav>
					</div>
				</div>
				
				
				<button type="button" class="navbar-toggle right" data-toggle="offcanvas" data-side="right" data-target="#off-canvas-right" data-canvas="body">
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				</button>
				
			</div>
			
		</header>

		<!-- Contenido empieza aqui - RESPETAR LA TABULACION -->
		
		<main class="wrapper public" role="main">
			
			<section id="home" class="home in">

				<div class="block-screen" data-background-2x="img/img-home.jpg" data-background="img/img-home.jpg">
					
					<div class="text-center block-translateY">
					
						<h1 class="h1 text-color-white">Búsqueda y selección de <strong class="text-color-secondary">talento Digital</strong></h1>
						<h2 class="h3 text-color-white">Más de 20 años liderando compañías digitales.<br />Nuestra experiencia es única para seleccionar talento digital.</h2>
					
					</div>
				</div>
								

			</section>
			
			
			<section id="hacemos" class="in">
				
				<div class="container">
				
					<div class="row margin-b-30">
						<div class="col-sm-12 text-center">
							<h2 class="h2 text-color-secondary">Qué hacemos</h2>
							<h3 class="h3">Conocemos la industria y profesiones digitales desde dentro.</h3>
						</div>
					</div>
				
					<div class="block-icons">
						
						<ul class="row">
							
							<li class="col-sm-4 col-md-3 text-center">
								<div class="content">
									<span class="icon-data xs"></span>DATA SCIENCE  & DATA ANALYTICS
									<div class="custom-dropdown">
									
									<ul>
										<li><span class="text-color-secondary">HEADHUNTING FOR EDREAMS ODIGEO (Data analyst for UX Research)</span></li>
										<li>HEADHUNTING FOR PERNOD RICARD (Data analyst & scientist)</li>
										<li>MANAGING FOR YAHOO! ECOMMERCE</li>
										<li>MANAGING FOR EMI MUSIC EMEA</li>
										<li>CONSULTING FOR ADN (KPMG)</li>
										<li>CONSULTING FOR GRUPO ZETA</li>

										
									</ul>
									
									
								</div>
								</div>
							</li>
							<li class="col-sm-4 col-md-3 text-center">
								<div class="content">
									<span class="icon-data xs"></span>DIGITAL MARKETING
									<div class="custom-dropdown">
									
									<ul>
										<li><span class="text-color-secondary">HEADHUNTING FOR PERNOD RICARD (Programatic specialist)</span></li>
										<li>MANAGING FOR EMI MUSIC EMEA</li>
										<!--
										<li>CONSULTING FOR ADN (KPMG)</li>
										<li>CONSULTING FOR GRUPO ZETA</li>
										<li>PERNOD (PROGRAMATIC)</li>-->
									</ul>
									
									
								</div>
								</div>
							</li>	
							<li class="col-sm-4 col-md-3  text-center">
								<div class="content">
									<span class="icon-data xs"></span>TECHNOLOGY
									<div class="custom-dropdown">
									
									<ul>
										<li><span class="text-color-secondary">HEADHUNTING FOR DOMINION (Strategy Director)</span></li>
										<li>BUSINESS DEV FOR MICROSOFT</li>
										<li>MANAGING FOR YAHOO! ECOMMERCE</li>
									</ul>
									
									
								</div>
								</div>
							</li>
							<li class="col-sm-4 col-md-3 text-center">
								<div class="content">
									<span class="icon-data xs"></span>UX & DESIGN

									<div class="custom-dropdown">
									
									<ul>
										<li><span class="text-color-secondary">HEADHUNTING FOR EDREAMS ODIGEO (UX Design, UX Research)</span></li>
										<li>MANAGING FOR YAHOO! ECOMMERCE</li>
										<li>CONSULTING FOR ADN (KPMG)</li>
										<!--<li>EDREAMS (UX DESIGN)</li>-->

									</ul>
									
									
								</div>
								</div>
							</li>								
							<li class="col-sm-4 col-md-3 text-center">
								<div class="content">
									<span class="icon-data xs"></span>ECOMMERCE
									<div class="custom-dropdown">
									
									<ul>
										<li>MANAGING FOR KELKOO</li>
										<li>MANAGING FOR YAHOO! ECOMMERCE</li>
										<li>MANAGING FOR EMI MUSIC EMEA</li>
									</ul>
									
									
								</div>
								</div>
							</li>
							<li class="col-sm-4 col-md-3  text-center">
								<div class="content">
									<span class="icon-data xs"></span>ADVERTISING
									<div class="custom-dropdown">
									
									<ul>
										<li><span class="text-color-secondary">HEADHUNTING FOR DAMM (Strategy Director)</span></li>
										<li>MANAGING FOR YAHOO! ECOMMERCE</li>
										<li>MANAGING FOR EMI MUSIC EMEA</li>
										<li>CONSULTING FOR GRUPO ZETA</li>
										<li>MANAGING FOR LA PERA MUSIC</li>
										<li>HEADHUNTING FOR PERNOD RICARD (Programatic Specialist)</li>

									</ul>
									
									
								</div>
								</div>
							</li>	
							<li class="col-sm-4 col-md-3 text-center">
								<div class="content">
									<span class="icon-data xs"></span>MOBILE
									<div class="custom-dropdown">
									
									<ul>
										<li><span class="text-color-secondary">HEADHUNTING FOR EDREAMS ODIGEO (Product Owner, UX & Front)</span></li>
										<li>MANAGING FOR EMI MUSIC EMEA</li>
										<!--<li>EDREAMS ( PRODUCT OWNER UX & FRONT)</li>-->
									</ul>
									
									
								</div>
								</div>
							</li>
							<li class="col-sm-4 col-md-3 text-center">
								<div class="content">
									<span class="icon-data xs"></span>CONTENT & VIDEO DISTRIBUTION

									<div class="custom-dropdown">
									
									<ul>
										<li><span class="text-color-secondary">HEADHUNTING FOR DAMM (Strategy Director)</span></li>
										<li>MANAGING FOR YAHOO! ECOMMERCE</li>
										<li>MANAGING FOR EMI MUSIC EMEA</li>
										<li>CONSULTING FOR GRUPO ZETA</li>
										<li>MANAGING FOR LA PERA MUSIC</li>
									</ul>
									
									
								</div>
								</div>
							</li>	
							<li class="col-sm-4 col-md-3  text-center">
								<div class="content">
									<span class="icon-data xs"></span>PUBLISHING & LICENSING

									<div class="custom-dropdown">
									
									<ul>
										<li><span class="text-color-secondary">HEADHUNTING FOR DAMM (Strategy Director)</span></li>
										<li>MANAGING FOR EMI MUSIC EMEA</li>
										<li>MANAGING FOR LA PERA MUSIC</li>
									</ul>
									
									
								</div>
								</div>
							</li>
							<li class="col-sm-4 col-md-3  text-center">
								<div class="content">
									<span class="icon-data xs"></span>MUSIC & ENTERTAINMENT

									<div class="custom-dropdown">
									
									<ul>
										<li><span class="text-color-secondary">HEADHUNTING FOR DAMM</span></li>
										<li>MANAGING FOR EMI MUSIC EMEA</li>
										<li>MANAGING FOR LA PERA MUSIC</li>
										<li>CONSULTING FOR GRUPO ZETA</li>
									</ul>
									
									
								</div>
								</div>
							</li>	
							<li class="col-sm-4 col-md-3  text-center">
								<div class="content">
									<span class="icon-data xs"></span>DIGITAL STRATEGY

									<div class="custom-dropdown">
									
									<ul>
										<li><span class="text-color-secondary">HEADHUNTING FOR DAMM (Strategy Director)</span></li>
										<li>HEADHUNTING FOR DOMINION (Strategy Director)</li>
										<li>MANAGING FOR EMI MUSIC EMEA</li>
										<li>CONSULTING FOR ADN (KPMG)</li>
										<li>CONSULTING FOR GRUPO ZETA</li>
									</ul>
									
									
								</div>
								</div>
							</li>
							<li class="col-sm-4 col-md-3  text-center">
								<div class="content">
									<span class="icon-data xs"></span>DEVELOPMENT(FRONT & END)

									<div class="custom-dropdown">
									
									<ul>
										<li>MANAGING FOR YAHOO! ECOMMERCE</li>
										<li>CONSULTING FOR ADN (KPMG)</li>

									</ul>
									
									
								</div>
								</div>
							</li>								
							<li class="col-sm-4 col-md-3  text-center">
								<div class="content">
									<span class="icon-data xs"></span>SOCIAL MEDIA

									<div class="custom-dropdown">
									
									<ul>
										<li>MANAGING FOR EMI MUSIC EMEA</li>
										<li>MANAGING FOR LA PERA MUSIC</li>
										<li>CONSULTING FOR GRUPO ZETA</li>
										<li>CONSULTING FOR MAHOU</li>
										<li>CONSULTING FOR SOCIAL NOISE</li>

									</ul>
									
									
								</div>
								</div>
							</li>								
							<li class="col-sm-4 col-md-3  text-center">
								<div class="content">
									<span class="icon-data xs"></span>CHANGE MANAGEMENT & DIGITAL TRANSFORMATION


									<div class="custom-dropdown">
									
									<ul>
										<li><span class="text-color-secondary">HEADHUNTING FOR DAMM (Strategy Director)</span></li>
										<li>HEADHUNTING FOR DOMINION (Strategy Director)</li>
										<li>MANAGING FOR EMI MUSIC EMEA</li>
										<li>MANAGING FOR MICROSOFT CLIENTS</li>
										<!--<li>DOMINION (STRATEGY DIRECTOR)</li>
										<li>DAMM (STRATEGY DIRECTOR)</li>-->

									</ul>
									
									
								</div>
								</div>
							</li>								
							<li class="col-sm-4 col-md-3  text-center">
								<div class="content">
									<span class="icon-data xs"></span>PRODUCT DEVELOPMENT


									<div class="custom-dropdown">
									
									<ul>
										<li><span class="text-color-secondary">HEADHUNTING FOR EDREAMS ODIGEO (Product Owner, UX & Front)</span></li>
										<li>MANAGING FOR EXCITE@HOME</li>
										<li>MANAGING FOR YAHOO! ECOMMERCE</li>
										<li>MANAGING FOR EMI MUSIC EMEA</li>
										<li>MANAGING FOR LA PERA MUSIC</li>

									</ul>
									
									
								</div>
								</div>
							</li>								
							<li class="col-sm-4 col-md-3  text-center">
								<div class="content">
									<span class="icon-data xs"></span>DIGITAL BUSINESS DEVELOPMENT


									<div class="custom-dropdown">
									
									<ul>
										<li><span class="text-color-secondary">HEADHUNTING FOR DAMM (Strategy Director)</span></li>
										<li>MANAGING FOR KELKOO</li>
										<li>MANAGING FOR EXCITE@HOME</li>
										<li>MANAGING FOR YAHOO! ECOMMERCE</li>
										<li>MANAGING FOR EMI MUSIC EMEA</li>
										<!--
										<li>MANAGING FOR KELKOO</li>
										<li>MANAGING FOR EXCITE@HOME</li>
										<li>MANAGING FOR YAHOO! ECOMMERCE</li>
										<li>MANAGING FOR EMI MUSIC EMEA</li>
										<li>DAMM (STRATEGY DIRECTOR)</li>-->

									</ul>
									
									
								</div>
								</div>
							</li>								
							<li class="col-sm-4 col-md-offset-3 col-md-3 text-center">
								<div class="content">
									<span class="icon-data xs"></span>PEOPLE LEADERSHIP



									<div class="custom-dropdown">
									
									<ul>
										<li><span class="text-color-secondary">HEADHUNTING FOR DAMM (Strategy Director)</span></li>
										<li>HEADHUNTING FOR DOMINION (Strategy Director)</li>
										<li>MANAGING FOR EMI MUSIC EMEA</li>
										<li>MANAGING FOR YAHOO! ECOMMERCE</li>
										<li>CONSULTING FOR ADN (KPMG)</li>
										<li>CONSULTINGO FOR GRUPO ZETA</li>

										<!--
										<li>HEADHUNTING FOR DAMM</li>
										<li>HEADHUNTING FOR DOMINION</li>
										<li>MANAGING FOR EMI MUSIC EMEA</li>
										<li>MANAGING FOR YAHOO! ECOMMERCE</li>
										<li>CONSULTING FOR ADN (KPMG)</li>
										<li>CONSULTINGO FOR GRUPO ZETA</li>
										<li>DOMINION (STRATEGY DIRECTOR)</li>
										<li>DAMM (STRATEGY DIRECTOR)</li>
										-->

									</ul>
									
									
								</div>
								</div>
							</li>																													
							<li class="col-sm-4 col-md-3  text-center">
								<div class="content">
									<span class="icon-data xs"></span>ENTREPRENEURSHIP


									<div class="custom-dropdown">
									
									<ul>
										<li>KELKOO</li>
										<li>NEGONE</li>
										<li>LA PERA MUSIC</li>

									</ul>
									
									
								</div>
								</div>
							</li>	




							
														
													
						</ul>
					
					</div>
				</div>
			</section>
			
			<section id="equipo"  class="in" data-background-2x="img/img-team.jpg" data-background="img/img-team.jpg">
				
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="h2 text-color-secondary">Equipo</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-5 text-right text-center-xs margin-b-15">
							<img src="img/manolo-vizuete.jpg" class="rounded bordered"/>
							
						</div>
						<div class="col-sm-7">
							<h2 class="h2 text-color-white">Manolo Vizuete / socio director</h2>
							<p class="text-color-white">Manolo cuenta con más de 20 años de experiencia liderando equipos en cada una de las áreas digitales.</p>
							
							<ul>
								<li class="text-color-white">VP Digital Development @EMI EMEA </li>
								<li class="text-color-white">Business Dev @Microsoft Spain</li>
								<li class="text-color-white">E-commerce Director @Yahoo! Spain</li>
								<li class="text-color-white">Managing Director @Kelkoo (E-commerce)</li>
								<li class="text-color-white">Marketing & BD Director @Excite (media portal)</li>
								<li class="text-color-white">Entrepeneur @La Pera (digital music content) and @Negone (digital entertainment)</li>
							</ul>
							
							<p class="text-color-white">Durante su carrera profesional ha gestionado procesos de cambio, ha liderado innovadoras  iniciativas de negocio, y ha fichando talento para los equipos con los que ha trabajado en startups, multinacionales y proyectos personales.</p>
							
							<p class="text-color-white">También contamos con un equipo de freelancers especializados en cada área digital (basada en proyectos).</p>
							
							
						</div>						
					</div>
				</div>
					
			</section>				
				
			<section id="clientes" class="in">
				
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="h2 text-color-secondary">Clientes</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							
							<ul class="list-unstyled row">
							
								<li class="col-sm-3 col-xs-6 text-center"><img src="img/clientes/neverseen.png" class="img-responsive" alt=""/></li>
								<li class="col-sm-3 col-xs-6 text-center"><img src="img/clientes/edreams.png" class="img-responsive" alt=""/></li>
								<li class="col-sm-3 col-xs-6 text-center"><img src="img/clientes/pernord.png" class="img-responsive" alt=""/></li>
								<li class="col-sm-3 col-xs-6 text-center"><img src="img/clientes/dominion.png" class="img-responsive"  alt=""/></li>
								
							</ul>
							
							
							
						</div>
					</div>							
					
					
				</div>
				
			</section>
			
			<section id="contacto" data-background-2x="img/img-contact.jpg" data-background="img/img-contact.jpg" class="in">
				
				<div class="container">
					<div class="row margin-b-70">
						<div class="col-sm-12 text-center">
							<h2 class="h2 text-color-secondary">Contacto</h2>
							<h2 class="h3 text-color-white">Cuéntanos lo que necesitas y hablemos</h2>

						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							
							
							<form method="post" action="gracias.php">
								<div class="block-form">
								  <div class="form-group">
									    <label for="" class="sr-only">Nombre</label>
									    <input type="text" class="form-control" id="nombre" placeholder="Nombre">
								  </div>
								  <div class="form-group">
									    <label for="" class="sr-only">Email</label>
									    <input type="mail" class="form-control" id="email" placeholder="Email">
								  </div>								  
								  <div class="form-group">
									    <label for="" class="sr-only">Mensaje</label>
										<textarea id="tellus" name="message" required="">Escribe tu mensaje</textarea>

		
								  </div>					
								  <div class="form-group">
									<input type="submit" name="submit" id="" class="btn btn-secondary pull-right" value="Enviar">

		
								  </div>									  
								  
								  
								  			  
								</div>
							</form>
						
						</div>
					</div>				
					
					
				</div>
				
			</section>			
			
			
			
			
	    </main>	
	    
    	<footer class="hide-canvas-in">
			
			<div class="container">
				
				<div class="row">
						<div class="col-xs-3">
							<a href="#" class="">
								<h2 class="logo text-color-primary">DIGITALHUNTING</h2>
							</a>
						</div>		
						<div class="col-xs-9 text-right">
							<div class="social">
								<a href="https://www.linkedin.com/in/manuelvizuete/"><img src="img/icon-linkedin.png" alt=""></a>
							</div>
						</div>
				</div>
				<div class="row">
						<div class="col-sm-12">
							<small>©DIGITALHUNTING 2017 - TODOS LOS DERECHOS RESERVADOS - .</small>
						</div>		
						
				</div>				
			</div>
			
		</footer>

    
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