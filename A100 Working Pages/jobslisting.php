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
	
    $con=mysqli_connect("127.0.0.1", "root", "a100", "mydb"); //This my locally hosted database for testing purposes


    if (mysqli_connect_errno($con))
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   else{
   
   $result = mysqli_query($con,"SELECT * FROM Jobs");

   echo "<table border='1' cellspacing='0' cellpadding = '6' >
   <tr>
   <th>Job Title</th>
   <th>Job Type</th>
   <th>Location</th>
   <th>Company Description</th>
   <th>Job Description</th>
   <th></th>
   </tr>";
   
   
   while($row = mysqli_fetch_array($result)){

   echo "<tr>";
   echo "<td>" . $row['title'] . "</td>";
   echo "<td>" . $row['type'] . "</td>";
   echo "<td>" . $row['location'] . "</td>";
   echo "<td>" . $row['company_description'] . "</td>";
   echo "<td>" . $row['job_description'] . "</td>";
   echo "<td><a href='apply.html'>Apply!</a></td>";
   echo "</tr>";
   
   }
   
   echo "</table>";
   
   mysqli_close($con);


 }
	
	?>


  </body>
</html>
