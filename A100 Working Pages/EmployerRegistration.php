<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!--John:Employer Registration form handling-->
  <head>
    <title>Employer Registration</title>
    <link rel="stylesheet" type="text/css" href="registrationstyling.css" />
  </head>
  
  
  <body class="center">
	
	<h1>Employer Registration Complete</h1>
	<p>Thank You for joining us.<p>

    <dl>
      <dt>Company Name:</dt><dd><?php echo $_POST["company_name"]?></dd>
      <dt>Location:</dt><dd><?php echo $_POST["location"]?></dd>
      <dt>Description:</dt><dd><?php echo $_POST["company_desc"]?></dd>
	  <dt>User ID:</dt><dd><?php echo $_POST["user_id"]?></dd>
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

$sql = "INSERT INTO Registered_Employers (company_name, location, company_desc, user_name, password)
VALUES(:company_name,:location,:company_desc, :user_name, :password)";

try {
$st = $conn->prepare( $sql );
$st->bindValue( ":company_name", $_POST["company_name"], PDO::PARAM_STR );
$st->bindValue( ":location", $_POST["location"], PDO::PARAM_STR );
$st->bindValue( ":company_desc", $_POST["company_desc"], PDO::PARAM_STR );
$st->bindValue( ":user_name", $_POST["user_id"], PDO::PARAM_STR );
$st->bindValue( ":password", $_POST["pass"], PDO::PARAM_STR );
$st->execute();
echo "query success";
} catch ( PDOException $e ) {
echo "Query failed: " . $e->getMessage();
}

?>


  </body>
 
</html>
