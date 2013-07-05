	<meta charset="utf-8" /><!-- HTML5 Encoding / -->
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	
	<!-- LIFE 11/15/07 to 6/25/13
	Ganginator's Notes:
	This is an mix of HTML5 Boiler Plate, Bootstrap, Font Awesome, and my own code, including many references.
	I'm using it for my Online Resume, my business Aerial Applications, Templating, and Examples.
	I'm Still Modifying for personal use, and will remove uneccesary stuff as I go.
	I'm still considering minifying eveything when finished.
	Please give me credit where it is due.
	And as always, contact me if you are interested in hiring me, or with any errors, sugestions, or help.
	I also add some unnecessary DIVs, ID's, and Styles for referencing.
	So don't be too surprised. ;-)
	-->
	
	<!-- A Good Resource: http://net.tutsplus.com/tutorials/html-css-techniques/25-html5-features-tips-and-techniques-you-must-know/ -->
	
	<!-- HTML5 does not require you to wrap your attributes in quotes, and you do not have to close your elements. I, however, prefer the XHTML Structured Semantic approach even though it can seem redundant. -->
	
	<!-- LEFTOVERS WILL BE REMOVED: More ideas for your 'head' here:
	h5bp.com/d/head-Tips -->
	
	
	<title>. - : Aerial Applications | ECHO THIS | Duluth, Minnesota : - .</title>
	
	
	<!-- http://en.wikipedia.org/wiki/Musikalisches_W%C3%BCrfelspiel -->
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	
	<!-- Google will often use this as its description of your page/site. Make it good. -->
	<meta name="title" content="Aerial Applications" />
	<meta name="description" content="This is Aerial Applications. Duluth, Minnesota." />
	<meta name="keywords" content="Duluth, Minnesota, Aerial Applications, Aerial, Applications, Jesse Gangi, Jesse, Gangi Duluth, Minnesota, MN, Superior, Wisconsin, WI, Twin Ports, Twin, Ports, Northland, Upper Mid-west, Upper, Mid-west, Mid, West, HTML5 Boilerplate, HTML5, Boilerplate, Twitter Bootstrap, Twitter, Bootstrap, Font Awesome, Font, Awesome, CSS3, JavaScript, PHP" />
	<meta name="author" content="Jesse Gangi" />
	<meta name="Copyright" content="Copyright &copy; 2007-13 Jesse Gangi, Aerial Applications. All Rights Reserved. Duluth, Minnesota." />
	<meta name="google-site-verification" content="EMPTY" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	
	<!-- Dublin Core Metadata:
	http://dublincore.org/ -->
	<!-- Project Name -->
	<meta name="DC.title" content="Aerial Applications" /><!-- Project Name -->
	<!-- What you're about. -->
	<meta name="DC.subject" content="This is Aerial Applications. Duluth, Minnesota." />
	<!-- Who made this site. -->
	<meta name="DC.creator" content="Jesse Gangi" />
	
	
	<!-- Activate Database -->
	<?php
		include("database.php")
	?>
	
	
	<!-- It is no longer necessary to use the type attribute in stylesheets, it is implied in HTML5! -->
	<!-- AS ALWAYS, THE ORDER OF THE STACK IS IMPORTANT!!! -->
	<link rel="stylesheet" href="css/vendor/normalize.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap/bootstrap-responsive.min.css" />
	<!-- <link rel="stylesheet" href="css/vendor/jquery/jquery.pageslide.css" /> -->
	<link rel="stylesheet" href="css/vendor/font-awesome/font-awesome.min.css" />
	<!-- PLACED carousel.css LINK IN database style home include VIA style.php -->
	<!-- <link rel="stylesheet" href="css/carousel.css" /> -->
	
	<!-- CONSIDER ADDING ALL .css INTO database -->
	<?php
		include("includes/style.php")
	?>
	
	<!-- <link rel="stylesheet" href="css/main.css" /> -->
	<!-- <link rel="stylesheet" href="css/style.css" /> -->
	
	<link rel="stylesheet" href="css/ganginator-bootstrap.css" />
	<!-- PLACED ganginator-carousel.css LINK IN database style home include VIA style.php -->
	<!-- <link rel="stylesheet" href="css/ganginator-carousel.css" /> -->
	<!-- <link rel="stylesheet" href="css/ganginator-pageslide.css" /> -->
	<link rel="stylesheet" href="css/ganginator.css" />
	
	
	
	
	<!-- All JavaScript at the bottom so the pages load faster, except Modernizr for HTML5/CSS3 feature detection, and HTML5 Shiv for enabling HTML5 in IE. Technically Modernizer 1.5+ includes HTML5 Shiv. -->
	<!-- Modernizr 2 (re)introduced modular builds. After testing create a customized build (using only the tests you need) for a production-ready, minified, and compressed version. -->
	<!-- It is no longer necessary to use the type attribute in scripts, it is implied in HTML5! -->
	<script src="http://modernizr.com/downloads/modernizr-latest.js"></script>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- IS THIS REALLY DIFFERENT? ...shiv VS ...shim -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	
	<!-- LEFTOVERS WILL BE REMOVED: Place favicon.ico and apple-touch-icon.png in the root directory
	mathiasbynens.be/notes/touch-icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57-precomposed.png" />
	<link rel="shortcut icon" href="favicon.gif" />
	<link rel="icon" href="favicon.gif" />
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="icon" href="favicon.ico" />