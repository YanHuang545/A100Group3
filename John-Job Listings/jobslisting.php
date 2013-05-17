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
	

    $con=mysqli_connect("127.0.0.1", "root", "", "mydb"); //This my locally hosted database for testing purposes


    if (mysqli_connect_errno($con))
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   else{
   
   $result = mysqli_query($con,"SELECT * FROM Jobs");

   echo "<table border='1'>
   <tr>
   <th>Job Title</th>
   <th>Job Type</th>
   <th>Location</th>
   <th>Job Description</th>
   </tr>";
   
   
   while($row = mysqli_fetch_array($result)){

   echo "<tr>";
   echo "<td>" . $row['Job Title'] . "</td>";
   echo "<td>" . $row['Job Type'] . "</td>";
   echo "<td>" . $row['Location'] . "</td>";
   echo "<td>" . $row['Job Description'] . "</td>";
   echo "</tr>";
   
   }
   
   echo "</table>";
   
   mysqli_close($con);


 }
	
	?>


  </body>
</html>
