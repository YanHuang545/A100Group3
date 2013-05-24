<?php
session_start();
   mysql_pconnect("localhost","root","");
   mysql_select_db("jobs");
   $page= $_GET['page'];
?>
<html>
<head>
<title> user login</title>

<link href="style.css" type="text/css" rel="stylesheet">

</head>
<body>
<center>
</body>
<table>
<tr>
<td id="body">
<h1> Login system</h1>

<?php
if ( !$page ){ 
   $page="home";
 }

include("page/$page.php");

?>
</td>
<td id="nav"> 
<?php
if (!$session['uid']){
?>
<a href="?page=login"> login </a>
<?php
}else{
?>
<a href="?page=login"> logout</a>
<?php
}
?>
</td>
</tr>
</table>
</center>
</body>
</html>
