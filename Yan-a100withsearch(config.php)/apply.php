<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <!--Robert: Application submission form-->
  <head>
    <title>Thank You</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    
    <h1>Thank You</h1>

    <p>Thank you for submitting your application. Here is the information you submitted:</p>

    <dl>
      <dt>Name</dt><dd><?php echo $_POST["name"]?></dd>
      <dt>Email</dt><dd><?php echo $_POST["email"]?></dd>
      <dt>Phone</dt><dd><?php echo $_POST["phone"]?></dd>
      <dt>Resume</dt><dd><?php echo $_POST["resume"]?></dd>
      <dt>Letter</dt><dd><?php echo $_POST["letter"]?></dd>
    </dl>

<?php
require_once("config.php");
$sql = "INSERT INTO applications (name, email, phone, file_location, resume, letter) VALUES (:name, :email,
:phone, :file_location, :resume, :letter)";
try {
$st = $conn->prepare( $sql );
$st->bindValue( ":name", $_POST["name"], PDO::PARAM_STR );
$st->bindValue( ":email", $_POST["email"], PDO::PARAM_STR );
$st->bindValue( ":phone", $_POST["phone"], PDO::PARAM_STR );
$st->bindValue( ":file_location", 'documents\\', PDO::PARAM_STR );
$st->bindValue( ":resume", $_POST["resume"], PDO::PARAM_LOB );
$st->bindValue( ":letter", $_POST["letter"], PDO::PARAM_LOB );
$st->execute();
} catch ( PDOException $e ) {
echo "Query failed: " . $e->getMessage();
}
?>

  </body>
</html>
