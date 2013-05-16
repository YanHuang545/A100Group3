<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Thank You</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Thank You</h1>

    <p>Thank you for your time. Here is the job information you submitted:</p>

    <dl>
      <dt>Job Title</dt><dd><?php echo $_POST["jobTitle"]?></dd>
      <dt>Job Type</dt><dd><?php echo $_POST["jobType"]?></dd>
      <dt>Location</dt><dd><?php echo $_POST["location"]?></dd>
      <dt>Company Name</dt><dd><?php echo $_POST["companyName"]?></dd>
      <dt>Company Description</dt><dd><?php echo $_POST["companyDescription"]?></dd>
      <dt>Job Description</dt><dd><?php echo $_POST["jobDescription"]?></dd>
      <dt>Skills Required</dt><dd><?php echo $_POST["skills"]?></dd>
      <dt>Posting Date</dt><dd><?php echo $_POST["postingDate"]?></dd>
      <dt>Contact Person</dt><dd><?php echo $_POST["contactPerson"]?></dd>
      <dt>E-mail</dt><dd><?php echo $_POST["email"]?></dd>
      
    </dl>

  </body>
</html>
