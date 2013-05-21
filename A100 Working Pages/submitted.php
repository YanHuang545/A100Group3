<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <!--Robert: Submitted applications browse page-->
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
echo "<table border='1' cellspacing='0' cellpadding='6'> 
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
              <td>
                <a href='mailto:" . $row["email"] . "'>" . $row["email"] . "</a>
                <br><a href='tel:" . $row["phone"] . "'>" . $row["phone"] . "</td>
              <td>
                <a href='" . $row["file_location"] . $row["resume"] . "'>" . $row["resume"] . "</a>
                <br><a href='" . $row["file_location"] . $row["letter"] . "'>" . $row["letter"]. "</a></td>
              <td>" . $row["submitted_date"]. "</td>
            </tr>";
  }
} catch (PDOException $e) {
  echo "Query failed: " . $e->getMessage();
}
echo "</tbody></table>";
$conn = null;
?>

    <br><a href="index.html">Go back</a>
  </body>
</html>

