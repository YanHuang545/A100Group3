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
    require_once(dirname(__FILE__) . '\\config\\config.php');
    
    try {
        $conn = new PDO($dsn, $db_user, $db_pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
    
	$title=$_POST["jobTitle"];
	$location=$_POST["location"];
	
    $sql = "SELECT * FROM jobs where title like'%" . $title . "%' and location like'%" . $location . "%'";
    echo "<table border='1' cellspacing='0' cellpadding = '6' >
    <tr>
    <th>Job Title</th>
    <th>Job Type</th>
    <th>Location</th>
    <th>Company Description</th>
    <th>Job Description</th>
    
    </tr>";

    try {
      $rows = $conn->query($sql);
      foreach($rows as $row) {

        echo "<tr>
        <td><a href='viewjob.php?id=".$row['id']." '>" . $row['title'] . "</a></td>
        <td>" . $row['type'] . "</td>
        <td>" . $row['location'] . "</td>
        <td>" . $row['company_description'] . "</td>
        <td>" . $row['job_description'] . "</td>
        
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
