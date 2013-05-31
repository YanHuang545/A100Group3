<?php require_once("header.php"); ?>

    <div class="section group">
      <div class="col span_1_of_3">
      </div>
      <div class="col span_1_of_3" style="padding: 1em;">

    <dl>
      <dt>Name</dt><dd><?php echo $_POST["name"]?></dd>
      <dt>Email</dt><dd><?php echo $_POST["email"]?></dd>
      <dt>Phone</dt><dd><?php echo $_POST["phone"]?></dd>
      <dt>Resume</dt><dd><?php echo $_POST["resume"]?></dd>
      <dt>Letter</dt><dd><?php echo $_POST["letter"]?></dd>
    </dl>

<?php
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

         </div>
      </div>
<?php require_once("footer.php"); ?>

