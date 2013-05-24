<?php
mysql_pconnect('jobs','root', '');
?>
<html>
<head>
<title> User Log In </title>
</head>
<body>

<?php
         if (!$_POST['submit']){
        ?>
        <form action="" method="POST">
        </form>
        <table border="2" backroundcoor="red">
        <tr>
               
        <td colspan="2" align="center" bgcolor="#EAEAEA">&nbsp;<br>
        <p><a href="Employer Job enrty form.html" title="Registration" target="_self"> 
        If You dont have User Name? <lable> Create an Account</lable> <br><br></a></p>
        
         Username :
         <input type="text" name="User_Name"><br><br>
         Password:
         <input type="password" name="Password"><br><br>
         User Type:
         <input type="text" name="User_Type"><br><br>
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
 
    }
}   
 ?>  
</body>
</html>
