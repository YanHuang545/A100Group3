<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Applications</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>

    <h1>Applications</h1>

<?php
$dsn = "mysql:dbname=jobs";
$username = "root";
$password = "a100";

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT * FROM applications";
echo "<table border='1' cellspacing='0' cellpadding='4'> 
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Resume</th>
            <th>Date Submitted</th>
          </tr>
        </thead>
        <tbody>";

try {
  $rows = $conn->query($sql);
  foreach($rows as $row) {
      echo "<tr>
              <td>" . $row["id"] . "</td>
              <td>" . $row["name"] . "</td>
              <td>" . $row["email"] . "<br>" . $row["phone"] . "</td>
              <td>" . $row["resume"] . "<br>" . $row["letter"]. "</td>
              <td>" . $row["submitted_date"]. "</td>
            </tr>";
  }
} catch (PDOException $e) {
  echo "Query failed: " . $e->getMessage();
}
echo "</tbody></table>";
$conn = null;
?>

  </body>
</html>

