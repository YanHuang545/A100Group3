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

$sql = "INSERT INTO Employers (CompanyName, Location, CompanyDesc, WebsiteURL, UserName, Password)
VALUES(:CompanyName,:Location,:CompanyDesc, :WebsiteURL, :UserName, :Password)";

$hashedpassword=md5($_POST["pass"]);

try {
$st = $conn->prepare( $sql );
$st->bindValue( ":CompanyName", $_POST["company_name"], PDO::PARAM_STR );
$st->bindValue( ":Location", $_POST["location"], PDO::PARAM_STR );
$st->bindValue( ":CompanyDesc", $_POST["company_desc"], PDO::PARAM_STR );
$st->bindValue( ":WebsiteURL", $_POST["website_URL"], PDO::PARAM_STR );
$st->bindValue( ":UserName", $_POST["user_id"], PDO::PARAM_STR );
$st->bindValue( ":Password", $hashedpassword, PDO::PARAM_STR );
$st->execute();
} catch ( PDOException $e ) {
echo "Query failed: " . $e->getMessage();
}

?>
         </div>
      </div>
<?php require_once("footer.php"); ?>
