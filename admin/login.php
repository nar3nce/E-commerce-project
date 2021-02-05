
<?php


//connection
include ("../connection.php");

//codes for login start
session_start();
if(isset($_POST['Submit']))
{
 $username = $conn->real_escape_string($_POST['textfield']);
 $password = $conn->real_escape_string($_POST['textfield']);
 $r = "select * from admin where username = '$username' and password = '$password' ";
 $r2 = $conn->query($r);
 
  if($r2->num_rows != 0)
   {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    @header("location: index.php");
    exit();
   }
   else
   {
    echo ' wrong username or password, try again <a href="login.php">Click Here</a>';
	exit();
   }
}
?>


<!-- main CSS -->
        <link href="../css/narence.css" rel='stylesheet' type='text/css'>

        <!-- link of classes -->
        <link href="../js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="../css/templatemo_style.css"  rel='stylesheet' type='text/css'>
<style type="text/css">
<!--
.style1 {	font-weight: bold;
	font-size: xx-large;
}
.style6 {color: #000000; font-weight: bold; font-size: 18px; }
-->
</style>

	 
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="84%" border="1" align="center">
    <tr>
      <td> <p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
        <p align="center"><span class="style1"><span class="txt_darkgrey"><i>&darr; Login to Access </i></span><span class="txt_orange">Admin Area </span><em>&darr;</em></span></p>
        <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <center>
  <div align="center">
    <form name="form1" method="post" action="">
      <label>username: 
      <input type="text" name="textfield"> 
      password: 
      </label>
        <input type="password" name="textfield2">
         <label>
        <input type="submit" name="Submit" value="Submit">
        </label>
    </form>
  </div>
  </center>&nbsp;
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
 
  <p><br>
  </p>
  <p>&nbsp;    </p>
  <p>&nbsp;</p>
 
        
        
		