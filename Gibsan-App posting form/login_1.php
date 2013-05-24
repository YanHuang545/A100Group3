
<?php
mysql_pconnect('jobs','root', '');
?>

<html>
<head>
<title> User Log In </title>
<body>

<?php
 if (!$session['uid']){
 if (!$_POST['submit']){
 //?>
 <form action="" method="POST">
 <table>
 <tr>
 <td>username</td>
 <td><input type="text" name="username"></td>
 </tr>
 <tr>
 <td>password</td>
 <td><input type="password"  name="username"></td>
 </tr>
 <tr>
  <td colspan='2'>
 <input type="submit"  value="login" name="submit"></td>
 </tr>
 </table>
 </form>
 <?php>
  //}else{
 
 $username = $_POST['username'];
 $Password =md5($_POST['password']);
 $Usertype = $_POST['User_Type'];
 $errors = array();
   if (!$username){
   $errors[1] = "you didnt enetr username.";
   }
   if (!$Password){
   $errors[2] = "you didnt enetr username.";
   }
   }
$sql = "SELECT * FROM `login` WHERE `username`= `$username`";
$res = mysql_query($sql) or die (mysql_error());
$exist=mysql_num_rows($res);

if (count($$exist)==0){
 $errors[3] = "username not exist.";
 
}else{
   $sql = "SELECT * FROM `login` WHERE `username`= `$username` AND `password`= `$Password`";
   $res = mysql_query($sql)or die (mysql_error());
   $exist=mysql_num_rows($res);
   
   if (count($$exist)==0){
   
   $errors[3] = "username and password do not much."; 
    }
   }
  if (count($$exist)>0){ 
    echo "<ul>";
  foreach($errors as $errors){
   echo "<li>";
   echo $errors;
   echo "</li>";
  }
  echo "</ul>";
 }else{  
 
 $sql = "SELECT * FROM `login` WHERE `username`= `$username` AND `password`= `$Password`";
 $res = mysql_query($sql)or die (mysql_error());
 $res = mysql_fectch_assoc($res);
 $_SESSION['uid'] = $res['id'];
 echo "you have loged suceesuly";
  }
}else{
 echo" you already loged in";
  }
  ?>
</body>
</html>







