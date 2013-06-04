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
      <dt>City:</dt><dd><?php echo $_POST["city"]?></dd>
      <dt>Occupation:</dt><dd><?php echo $_POST["occupation"]?></dd>
	  <dt>User ID:</dt><dd><?php echo $_POST["user_name"]?></dd>
    </dl>

<?php

$sql = "INSERT INTO Employees (FirstName, LastName, City, Occupation, Employer, UserName, Password)
VALUES(:FirstName, :LastName,:City,:Occupation, :Employer, :UserName, :Password)"; //not presently sure how to handle the files

$hashedpassword=md5($_POST["pass"]);

try {
$st = $conn->prepare( $sql );
$st->bindValue( ":FirstName", $_POST["first_name"], PDO::PARAM_STR );
$st->bindValue( ":LastName", $_POST["last_name"], PDO::PARAM_STR );
$st->bindValue( ":City", $_POST["city"], PDO::PARAM_STR );
$st->bindValue( ":Occupation", $_POST["occupation"], PDO::PARAM_STR );
$st->bindValue( ":Employer", $_POST["employer"], PDO::PARAM_STR );
$st->bindValue( ":UserName", $_POST["user_name"], PDO::PARAM_STR );
$st->bindValue( ":Password", $hashedpassword, PDO::PARAM_STR );
$st->execute();
} catch ( PDOException $e ) {
echo "Query failed: " . $e->getMessage();
}

?>
         </div>
      </div>
<?php require_once("footer.php"); ?>
