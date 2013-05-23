<!--Configuration file-->
<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "Chuckhuang545";
$db_name = "mydatabase";
$dsn = "mysql:dbname=mydatabase";

// Connection
try {
    $conn = new PDO($dsn, $db_user, $db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
