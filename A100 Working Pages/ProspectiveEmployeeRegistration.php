<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!--John:Prospective Employee Registration form handling-->
  <head>
    <title>Prospective Employee Registration</title>
    <link rel="stylesheet" type="text/css" href="registrationstyling.css" />
  </head>
  
  
  <body class="center">
	
	<h1>Prospective Employee Registration Complete</h1>
	<p>Thank You for joining us.<p>

    <dl>
      <dt>Name:</dt><dd><?php echo $_POST["name"]?></dd>
      <dt>Email:</dt><dd><?php echo $_POST["email"]?></dd>
      <dt>Phone:</dt><dd><?php echo $_POST["phone"]?></dd>
	  <dt>User ID:</dt><dd><?php echo $_POST["user_name"]?></dd>
    </dl>

<?php
$dsn = "mysql:host=localhost;dbname=mydb;charset=utf8";
$username = "root";
$password = "";

try {
$conn = new PDO( $dsn, $username, $password );
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

echo "connection succesful";

} catch ( PDOException $e ) {
echo "Connection failed: " . $e->getMessage();
}

$sql = "INSERT INTO Registered_Prospective_Employees (name, email, phone, user_name, password)
VALUES(:name,:email,:phone, :user_name, :password)"; //not presently sure how to handle the files

$hashedpassword=md5($_POST["pass"]);

try {
$st = $conn->prepare( $sql );
$st->bindValue( ":name", $_POST["name"], PDO::PARAM_STR );
$st->bindValue( ":email", $_POST["email"], PDO::PARAM_STR );
$st->bindValue( ":phone", $_POST["phone"], PDO::PARAM_STR );
$st->bindValue( ":user_name", $_POST["user_name"], PDO::PARAM_STR );
$st->bindValue( ":password", $hashedpassword, PDO::PARAM_STR );
$st->execute();
echo "query success";
} catch ( PDOException $e ) {
echo "Query failed: " . $e->getMessage();
}

?>


  </body>
 
</html>
