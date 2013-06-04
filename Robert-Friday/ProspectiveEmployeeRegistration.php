<?php require_once("header.php"); ?>

    <div class="section group">
      <div class="col span_1_of_3">
      </div>
      <div class="col span_1_of_3">
	
	<h4>Prospective Employee Registration Complete</h4>
	<p>Thank You for joining us.<p>

    <dl>
      <dt>First name:</dt><dd><?php echo $_POST["first_name"]?></dd>
      <dt>Last name:</dt><dd><?php echo $_POST["last_name"]?></dd>
      <dt>City:</dt><dd><?php echo $_POST["location"]?></dd>
      <dt>Occupation:</dt><dd><?php echo $_POST["occupation"]?></dd>
	  <dt>User ID:</dt><dd><?php echo $_POST["user_name"]?></dd>
    </dl>

<?php

$sql = "INSERT INTO users (id, username, password)
VALUES(:id, :username, :password)";

$sql2 = "INSERT INTO employees (employeeID, firstName, lastName, location, occupation, userID)
VALUES(:employeeID, :firstName, :lastName, :location,:occupation, :userID)"; //not presently sure how to handle the files

$hashedpassword=md5($_POST["pass"]);
$employeeID=md5(uniqid());
$userID=md5(uniqid());

try {
$st = $conn->prepare( $sql );
$st->bindValue( ":id", $userID, PDO::PARAM_STR );
$st->bindValue( ":username", $_POST["user_name"], PDO::PARAM_STR );
$st->bindValue( ":password", $hashedpassword, PDO::PARAM_STR );
$st->execute();
echo "query success";
} catch ( PDOException $e ) {
echo "Query failed: " . $e->getMessage();
}

try {
$st = $conn->prepare( $sql2 );
$st->bindValue( ":employeeID", $employeeID, PDO::PARAM_STR );
$st->bindValue( ":firstName", $_POST["first_name"], PDO::PARAM_STR );
$st->bindValue( ":lastName", $_POST["last_name"], PDO::PARAM_STR );
$st->bindValue( ":location", $_POST["location"], PDO::PARAM_STR );
$st->bindValue( ":occupation", $_POST["occupation"], PDO::PARAM_STR );
$st->bindValue( ":userID", $userID, PDO::PARAM_STR );
$st->execute();
echo "query success";
} catch ( PDOException $e ) {
echo "Query failed: " . $e->getMessage();
}

?>
         </div>
      </div>
<?php require_once("footer.php"); ?>
