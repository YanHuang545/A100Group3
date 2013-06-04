<?php require_once("header.php"); ?>

    <div class="section group">
      <div class="col span_1_of_3">
      </div>
      <div class="col span_1_of_3">
	
	<h4>Employer Registration Complete</h4>
	<p>Thank You for joining us.<p>

    <dl>
      <dt>Company Name:</dt><dd><?php echo $_POST["company_name"]?></dd>
      <dt>Location:</dt><dd><?php echo $_POST["location"]?></dd>
      <dt>Description:</dt><dd><?php echo $_POST["company_desc"]?></dd>
	  <dt>User ID:</dt><dd><?php echo $_POST["user_id"]?></dd>
	  <dt>Website:</dt><dd><?php echo $_POST["website_URL"]?></dd>
    </dl>

<?php

$sql = "INSERT INTO company (companyID, companyName, location, companyDesc, userID)
VALUES(:companyID, :companyName,:location,:companyDesc, :userID)";

$sql2 = "INSERT INTO users (id, username, password, websiteURL) VALUES (:id, :username, :password, :websiteURL)";

$hashedpassword=md5($_POST["pass"]);
$userID=md5(uniqid());
$companyID=md5(uniqid());
echo uniqid() + " ";
echo $userID + " ";
echo $companyID;

try {
$st = $conn->prepare( $sql2 );
$st->bindValue( ":id", $userID, PDO::PARAM_STR );
$st->bindValue( ":username", $_POST["user_id"], PDO::PARAM_STR );
$st->bindValue( ":password", $hashedpassword, PDO::PARAM_STR );
$st->bindValue( ":websiteURL", $_POST["website_URL"], PDO::PARAM_STR );
$st->execute();
echo "query success \n";
} catch ( PDOException $e ) {
echo "Query failed: " . $e->getMessage();
}

try {
$st = $conn->prepare( $sql );
$st->bindValue( ":companyName", $_POST["company_name"], PDO::PARAM_STR );
$st->bindValue( ":location", $_POST["location"], PDO::PARAM_STR );
$st->bindValue( ":companyDesc", $_POST["company_desc"], PDO::PARAM_STR );
$st->bindValue( ":companyID", $companyID, PDO::PARAM_STR );
$st->bindValue( ":userID", $userID, PDO::PARAM_STR );
$st->execute();
echo "query success \n";
} catch ( PDOException $e ) {
echo "Query failed: " . $e->getMessage();
}



?>
         </div>
      </div>
<?php require_once("footer.php"); ?>
