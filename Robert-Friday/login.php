<?php require_once("header.php"); ?>

    <div class="section group">
      <div class="col span_1_of_3">
      </div>
      <div class="col span_1_of_3">
	
	<h4>User Login</h4>
<?php

/*$sql2 = "SELECT * FROM companies WHERE user_name= :user and password= :pass";*/

$username = $_POST["user"];
$hashedpassword = md5($_POST["pass"]);
$sql = "SELECT * FROM users WHERE username='".$username."' and password='".$hashedpassword."'";

try {
$st = $conn->prepare( $sql );
$st->bindValue( ":username", $_POST["user"], PDO::PARAM_STR );
$st->bindValue( ":password", $hashedpassword, PDO::PARAM_STR );
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
echo "We're sorry, but these credentials are not in our database";
}

/*
else{
try {
$st = $conn->prepare( $sql2 );
$st->bindValue( ":user_name", $_POST["user"], PDO::PARAM_STR );
$st->bindValue( ":password", $hashedpassword, PDO::PARAM_STR );
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

}*/

?>
         </div>
      </div>
<?php require_once("footer.php"); ?>
