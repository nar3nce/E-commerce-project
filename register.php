<?php


//connection
include ("connection.php");

//codes for register

if(isset($_POST['Submitorder']))
{

$u =  preg_replace('#[^A-Za-z0-9]#i', '', $_POST['textfield6']);
$p =  preg_replace('#[^A-Za-z0-9]#i', '', $_POST['textfield7']);
$fname =  preg_replace('#[^A-Za-z0-9]#i', '', $_POST['textfield']);
$m =  preg_replace('#[^A-Za-z0-9]#i', '', $_POST['textfield2']);
$lname =  preg_replace('#[^A-Za-z0-9]#i', '', $_POST['textfield3']);
$a =  preg_replace('#[^A-Za-z0-9]#i', '', $_POST['textarea']);
$c =  preg_replace('#[^A-Za-z0-9]#i', '', $_POST['textfield4']);
$e =  $_POST['textfield5'];
$date = date('y-m-d');
$sql = "  INSERT INTO `verisimilitude_corp`.`clients` (`username`, `password`, `fname`, `mi`, `lname`, `address`, `contact`, `email`, `date_registered`) VALUES ('$u', '$p', '$fname', '$m', '$lname', '$a', '$c', '$e', '$date') ";
$conn->query($sql);
@header("location: login.php");
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cart</title>
        <!-- main CSS -->
        <link href="css/narence.css" rel='stylesheet' type='text/css'>

        <!-- link of classes -->
        <link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
<link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>
<style type="text/css">
<!--

}
.style1 {color: #0000FF}

.style4 {
	color: #000000;
	font-weight: bold;
}
.style8 {color: #0000FF}
.style9 {color: #000066}
.style10 {color: #FF9933}
-->
</style>
</head>

<body>
<!-- header start -->
<?php 
session_start();
include("restriction.php"); 
if(isset($_SESSION["u"])) {
echo ' you are already logged in <a href="index.php">Click Here</a>';
exit();
}
?>
<!-- header end  -->
 <p>&nbsp;</p>
  <p align="center"><span class="h1"><span class="txt_darkgrey"><i>&darr; Register </i></span><span class="style10">Here</span> <em>&darr;</em></span></p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <div align="center"></div>
  <div align="center">
    <form id="form1" name="form1" method="post" action="">
      <table width="456" border="1" align="center">
        <tr>
          <td width="47%" bgcolor="#EFEFEF"><span class="style2 style4">Username: </span></td>
          <td width="53%" bgcolor="#EFEFEF"><label>
            <input type="text" name="textfield6" required/>
          </label></td>
        </tr>
        <tr>
          <td bgcolor="#EFEFEF"><span class="style2 style4">Password: </span></td>
          <td bgcolor="#EFEFEF"><label>
            <input type="password" name="textfield7" required/>
          </label></td>
        </tr>
        <tr>
          <td bgcolor="#EFEFEF"><span class="style2 style4">First name: </span></td>
          <td bgcolor="#EFEFEF"><input name="textfield" type="text" id="textfield" required /></td>
        </tr>
        <tr>
          <td bgcolor="#EFEFEF"><span class="style2 style4">Middle:</span></td>
          <td bgcolor="#EFEFEF"><label>
            <input name="textfield2" type="text" id="textfield2" size="10" required/>
          </label></td>
        </tr>
        <tr>
          <td bgcolor="#EFEFEF"><span class="style2"><span class="style4">Lastname</span>:</span></td>
          <td bgcolor="#EFEFEF"><input name="textfield3" type="text" id="textfield3" required/></td>
        </tr>
        <tr>
          <td bgcolor="#EFEFEF"><span class="style2 style4">Adress:</span></td>
          <td bgcolor="#EFEFEF"><textarea name="textarea" required></textarea></td>
        </tr>
        <tr>
          <td bgcolor="#EFEFEF"><span class="style2 style4">Contact number: </span></td>
          <td bgcolor="#EFEFEF"><input name="textfield4" type="text" id="textfield4" required/></td>
        </tr>
        <tr>
          <td bgcolor="#EFEFEF"><span class="style2 style4">Email:</span></td>
          <td bgcolor="#EFEFEF"><input name="textfield5" type="text" id="textfield5" required/></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p align="center">
        <label>
        <input name="Submitorder" type="submit" id="Submitorder" value="register" />
        </label>
      </p>
    </form>
  </div>
  <div class="text-center"></div>
</div>
<!-- footer start -->
<?php include("footer.html"); ?>
<!-- footer end  -->

</body>
</html>
