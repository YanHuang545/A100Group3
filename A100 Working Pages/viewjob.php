<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <!--John:PHP script pulling jobs from database-->
  
  <head>
    <title>Jobs Details</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Jobs Details</h1>

    <p>Here is the Job Details</p>

	
     <?php
    include dirname(__FILE__) . '\\config\\config.php';
   
    $jobid=$_GET["id"];  
    $sql = "SELECT * FROM jobs where id=".$jobid."";

    try {
      $rows = $conn->query($sql);
      foreach($rows as $row) {

        echo " <dl>
      <dt>Job Title</dt><dd>".$row['title']."</dd>
      <dt>Job Type</dt><dd>".$row['type']."</dd>
      <dt>Location</dt><dd>".$row['location']."</dd>
      <dt>Company</dt><dd>".$row['company']."</dd>
      <dt>Company_description</dt><dd>".$row['company_description']."</dd>
      <dt>Job description</dt><dd>".$row['job_description']."</dd>
      <dt>Skills Required</dt><dd>".$row['skills']."</dd>
      <dt>Posted Date</dt><dd>".$row['postingDate']."</dd>
      <dt>Contact Person</dt><dd>".$row['contact_name']."</dd>
      <dt>Email Address</dt><dd>".$row['contact_email']."</dd>
      
    </dl>

    "
         
	;
	  }
    } catch (PDOException $e) {
      echo "Query failed: " . $e->getMessage();
    }
    echo "</table>";
    $conn = null;
	  ?>
    
      <form method="post" action="apply.html" >
  <input type="submit" name="submit" value="Apply for this Job">
  </form>
  
  </body>
</html>
