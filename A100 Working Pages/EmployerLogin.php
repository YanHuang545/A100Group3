<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!--John:Employer Registration form handling-->
  <head>
    <title>Employer Registration</title>
    <link rel="stylesheet" type="text/css" href="registrationstyling.css" />
  </head>
  
  
  <body class="center">
	

<?php
$dsn = "mysql:host=localhost;dbname=mydb;charset=utf8";
$username = "root";
$password = "";

try {
$conn = new PDO( $dsn, $username, $password );
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

} catch ( PDOException $e ) {
echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT * FROM Registered_Employers WHERE user_name= :user_id and password= :pass";

try {
$st = $conn->prepare( $sql );
$st->bindValue( ":user_id", $_POST["user_id"], PDO::PARAM_STR );
$st->bindValue( ":pass", $_POST["pass"], PDO::PARAM_STR );
$st->execute();
$row=$st->fetch();
if($row==null){
echo "We're sorry but your login credentials are not in our database";
}
else{
echo "Welcome ";
echo $_POST["user_id"];
}
} catch ( PDOException $e ) {
echo "Query failed: " . $e->getMessage();
}

?>


  </body>
 
</html>
