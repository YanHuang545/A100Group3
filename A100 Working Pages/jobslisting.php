<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <!--John:PHP script pulling jobs from database-->
  
  <head>
    <title>Jobs Listing</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Jobs Listing</h1>

    <p>Here is a list of start up jobs in CT</p>

	
    <?php
    
    $dsn = "mysql:dbname=jobs";
    $username = "root";
    $password = "a100";

    try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }

    $sql = "SELECT * FROM Jobs";
    echo "<table border='1' cellspacing='0' cellpadding = '6' >
    <tr>
    <th>Job Title</th>
    <th>Job Type</th>
    <th>Location</th>
    <th>Company Description</th>
    <th>Job Description</th>
    <th></th>
    </tr>";

    try {
      $rows = $conn->query($sql);
      foreach($rows as $row) {

        echo "<tr>";
        "<td>" . $row['title'] . "</td>
        <td>" . $row['type'] . "</td>
        <td>" . $row['location'] . "</td>
        <td>" . $row['company_description'] . "</td>
        <td>" . $row['job_description'] . "</td>
        <td><a href='apply.html'>Apply!</a></td>
        </tr>";
      }
    } catch (PDOException $e) {
      echo "Query failed: " . $e->getMessage();
    }
    echo "</table>";
    $conn = null;
	  ?>
  </body>
</html>
