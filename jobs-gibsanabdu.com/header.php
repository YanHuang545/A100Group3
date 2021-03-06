<!DOCTYPE html>

<!--The Grid: Whiteboard Redesign by Robert Rotaru-->
<!--Based off of ResponsiveGridSystem by Graham Miller-->
<!--http://www.responsivegridsystem.com/-->

<!-- HTML5 Mobile Boilerplate -->
<!--[if IEMobile 7]><html class="no-js iem7"><![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->

<head>

	<meta charset="utf-8">
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>touch Startup</title>
	<meta name="description" content="This is the Responsive Grid System, a quick, easy and flexible way to create a responsive web site.">
	<meta name="keywords" content="responsive, grid, system, web design">

	<meta name="author" content="A100 Group 3">

	<meta http-equiv="cleartype" content="on">

	<link rel="shortcut icon" href="/favicon.ico">

	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/html5reset.css" media="all">
	<link rel="stylesheet" href="css/responsivegridsystem.css" media="all">
	<link rel="stylesheet" href="css/col.css" media="all">
	<link rel="stylesheet" href="css/2cols.css" media="all">
	<link rel="stylesheet" href="css/3cols.css" media="all">
	<link rel="stylesheet" href="css/4cols.css" media="all">
	<link rel="stylesheet" href="css/5cols.css" media="all">
	<link rel="stylesheet" href="css/6cols.css" media="all">
	<link rel="stylesheet" href="css/7cols.css" media="all">
	<link rel="stylesheet" href="css/8cols.css" media="all">
	<link rel="stylesheet" href="css/9cols.css" media="all">
	<link rel="stylesheet" href="css/10cols.css" media="all">
	<link rel="stylesheet" href="css/11cols.css" media="all">
	<link rel="stylesheet" href="css/12cols.css" media="all">
  <link rel="stylesheet" href="css/flip.css" media="all">
  <link rel="stylesheet" href="css/common.css" media="all">

  <!--Fonts-->
  <link href='http://fonts.googleapis.com/css?family=Geo' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700' rel='stylesheet' type='text/css'>
  

	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements and feature detects -->
	<script src="js/modernizr-2.5.3-min.js"></script>

  <!--PHP/MYSQL database configuration-->
  <?php require_once('config/config.php'); ?>

</head>

<body>

<div id="fb-root">
   
<script>
  //javascript sdk by Yan
  // Additional JS functions here
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '165558053619313', // App ID
      channelUrl : '//www.gibsanabdu.com/jobs/newhome.html', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    // Additional init code here

  };

  // Load the SDK asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
   
    FB.login(function(response) {
   if (response.authResponse) {
     console.log('Welcome!  Fetching your information.... ');
     FB.api('/me', function(response) {
       console.log('Good to see you, ' + response.name + '.');
     });
   } else {
     console.log('User cancelled login or did not fully authorize.');
   }
 });
</script> 
</div>

<div id="skiptomain"><a href="#maincontent">skip to main content</a></div>

<div id="wrapper">
	<div id="headcontainer">
		<header>
		<h1><a id="title-href" href="newhome.html"><span class="headcolor">touch</span>Startup</a></h1>
		</header>
	</div>
	<div id="maincontentcontainer">
		<div id="maincontent">

      <div id="nav" class="section group">
        <div class="col span_1_of_6">
          <a href="dummyval">About</a>
        </div>
        <div class="col span_1_of_6">
          <a href="dummyval">Community</a>
        </div>
        <div class="col span_1_of_6">
          <a href="jobslisting.php">Opportunities</a>
        </div>
        <div class="col span_1_of_6">
          <a href="dummyval">Experts</a>
        </div>
        <div id="search" class="col span_2_of_6">
          <form method="post" action="search.php">
          <input type="text" name="search" id="search" placeholder="Search" >
          </form>
        </div>
      </div>