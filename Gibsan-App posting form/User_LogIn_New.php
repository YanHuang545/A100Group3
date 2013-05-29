<?php
mysql_pconnect('gibsanabdu','root', 'a100');
?>
<html>
<head>
<title> User Log In </title>
</head>
<body>

<?php
 
 
        if (!$_POST['submit']){
        ?>
        <form action="index.php" method="POST" color="Red">
        </form>
        <table border="2">
        <tr>
        <td colspan="2" align="center"><br><br>
        <p><a href="Employer Job enrty form.html" title="job" target="_self">gfbdfgffssfg</a></p>
         If You dont have User Name? <lable> Create an Account</lable> <br><br><br>
         Username :
         <input type="text" name="User_Name"><br><br>
         Password:
         <input type="password" name="Password"><br><br>
         User Type:
         <select name="User Type:" id="01">
         <option>Job Seeker</option>
         <option>Employer</option>
         </select><br><br><br>
         <label>
         <input type="checkbox" name="01" id="01" />
          keep me Signed In </label><br><br>
                
        <input type="submit" value="Log In"  name="Submit" align="center">
        </td>
        </tr>
        
</table>
</form>
<?php
}   else{

   $Username = $_POST['User_Name'];
   $Password = $_POST['password'];
   $Usertype = $_POST['User_Type'];
   
   $errors = array();
   if (!$Username){
   $errors[1] = "invalid user name.";
   }
    if (!$Password){
   $errors[2] = "invalid PASSWORD.";
   }
   if (!$Usertype){
   $errors[3] = "invalid USER.";
   }   
  
   else {
   mysql_query("INSERT INTO 'jobs'.'User_LogIn'('User_Name','Password','User_Type')  
   
   VALUES ('".$Username."', '".md5($Password)."', '".$Usertype."',
    '1');");
    }
}   
 ?>  
</body>
</html>
