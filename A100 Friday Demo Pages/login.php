<!DOCTYPE html>

<!--Login Registration page done by John-->


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

	<title>Example of the Responsive Grid System</title>
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

	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements and feature detects -->
	<script src="js/modernizr-2.5.3-min.js"></script>

  <!--PHP/MYSQL database configuration-->
  <?php require_once('config/config.php'); ?>

</head>

<body>

<div id="skiptomain"><a href="#maincontent">skip to main content</a></div>

<div id="wrapper">
	<div id="headcontainer">
		<header>
		<h1><a id="title-href" href="newhome.html">The Grid</a></h1>
		<h2>A Whiteboard Redesign</h2>
		</header>
	</div>
	<div id="maincontentcontainer">
		<div id="maincontent">

      <div id="nav" class="section group">
        <div class="col span_1_of_6">
          <a href="sdfsdf">About</a>
        </div>
        <div class="col span_1_of_6">
          <a href="">Community</a>
        </div>
        <div class="col span_1_of_6">
          <a href="jobslisting.php">Opportunities</a>
        </div>
        <div class="col span_1_of_6">
          <a href="">Experts</a>
        </div>
        <div id="search" class="col span_2_of_6">
          <form method="post" action="search.php">
          <input type="text" name="search" id="search" value="Search" style="color:silver">
          </form>
        </div>
      </div>

    <div class="section group">
      <div class="col span_1_of_3">
      </div>
      <div class="col span_1_of_3">
	
	<h4>User Login</h4>
<?php

$sql = "SELECT * FROM Employees WHERE UserName= :UserName and Password= :Password";
$sql2 = "SELECT * FROM Employers WHERE UserName= :UserName and Password= :Password";

$hashedpassword = md5($_POST["pass"]);

try {
$st = $conn->prepare( $sql );
$st->bindValue( ":UserName", $_POST["user"], PDO::PARAM_STR );
$st->bindValue( ":Password", $hashedpassword, PDO::PARAM_STR );
$st->execute();
$row=$st->fetch();
} catch ( PDOException $e ) {
echo "Query failed: " . $e->getMessage();
}

if($row != null){
echo "Welcome, ";
echo $_POST["user"];
}

else{
try {
$st = $conn->prepare( $sql2 );
$st->bindValue( ":UserName", $_POST["user"], PDO::PARAM_STR );
$st->bindValue( ":Password", $hashedpassword, PDO::PARAM_STR );
$st->execute();
$row=$st->fetch();
} catch ( PDOException $e ) {
echo "Query failed: " . $e->getMessage();
}

if($row != null){
echo "Welcome, ";
echo $_POST["user"];
}

else{
echo "The credentials you have provided do not match any in our database";
}

}

?>
         </div>
      </div>
    </div>
  </div>
	<div id="footercontainer">
		<footer class="group">
			<div class="col span_1_of_4">
			<h4>About this site</h4>
			<p>The Grid is a redesign of The Whiteboard/CTNEXTDAILY based off of the idea of The Grid New Haven and the A100 program. This project is created by Group 3 of the A100 program. We strive to provide quality in our product and professionalism in our design.</p>
			</div>
			<div class="col span_1_of_4">
			<h4>Categories</h4>
      <p>Take a look at some of the categories we have to offer!</p>
      <select>
        <option value="profiles">Entrepreneur Profiles</option>
        <option value="users">User Profiles</option>
        <option value="experts">Ask an Expert</option>
        <option value="blogs">Blog Posts</option>
        <option value="events">Startup Events</option>
      </select>
      </div>
			<div class="col span_1_of_4">
			<h4>Social Media</h4>
      <p>Check us out at these various social media links for more Grid content and networking opportunities!</p>
			<a href="">Twitter</a><br>
      <a href="">Facebook</a><br>
      <a href="">LinkedIn</a><br>
      <a href="">Google+</a>
      
      </div>
			<div class="col span_1_of_4">
			<h4>Other</h4>
			<p>Seeing as you asked, the <a href="http://www.responsivegridsystem.com">Responsive Grid System</a> is brought to you by <a href="http://www.grahamrobertsonmiller.co.uk">Graham Miller</a> and is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a>.</p>
			</div>

		</footer>
	</div>
</div>



	<!-- JavaScript at the bottom for fast page loading -->

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>

	<!--[if (lt IE 9) & (!IEMobile)]>
	<script src="js/selectivizr-min.js"></script>
	<![endif]-->


	<!-- More Scripts-->
	<script src="js/responsivegridsystem.js"></script>


</body>
</html>
