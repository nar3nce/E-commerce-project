
<?php

//connection
include ("../connection.php"); 

//restriction
include("restriction.php");


//header
include("header.php");

//code for Adding new admin start

if(isset($_POST['Submit']))
{
 $u = preg_replace('#[^A-Za-z0-9]#i', '', $_POST['textfield']);
 $p = preg_replace('#[^A-Za-z0-9]#i', '', $_POST['textfield2']);
 $date = date('y-m-d');
 $r = $conn->query(" INSERT INTO `admin` (`id`, `username`, `password`) VALUES (NULL, '$u', '$p') ");

 
 
 
}//code for Adding new admin end



// codes for displaying admin start 
$narence = "";
$r = $conn->query("select * from admin");
$c = $r->num_rows;
if($c > 0)
{
 while($row = $r->fetch_array())
   {
    $u = $row['username'];
	$p = $row['password'];
	$narence .= ' 
        <table width="36%" border="1" align="center">
          <tr>
            <td bgcolor="#EFEFEF"><div align="center" class="style3">'.$u.'</div></td>
            <td bgcolor="#EFEFEF"><div align="center" class="style3">'.$p.'</div></td>
          </tr>
        </table>
	
	
	            ';
   }
}
else
{
 exit();
}  // codes for displaying admin end
?>
<style type="text/css">
<!--
.style1 {
	font-weight: bold;
	font-size: xx-large;
}
.style2 {
	color: #0000FF;
	font-weight: bold;
}
.style3 {color: #000000; font-weight: bold; }
.style4 {color: #000000}
-->
</style>

	 
  <p>&nbsp;</p>
  <p align="center" class="style1"><span class="txt_darkgrey"><i> &darr; Add new </i></span><span class="txt_orange">ADMINISTRATOR</span> <em>&darr;</em></p>
  <p align="center" class="style1">&nbsp;</p>
  <form id="form1" name="form1" method="post" action="" onsubmit="return validateForm()" enctype="multipart/form-data" >
    <table width="31%" height="60" border="0" align="center">
      <tr>
        <td width="32%"><div align="justify" class="style2">username:</div></td>
        <td width="68%"><label>
          <input name="textfield" type="text" maxlength="asdas" />
        </label></td>
      </tr>
      <tr>
        <td><div align="justify" class="style2">password:</div></td>
        <td><input name="textfield2" type="text" /></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p align="center">
      <input name="Submit" type="submit" value="Add" />
    </p>
  </form>
  <p>&nbsp; </p>
  <p>&nbsp;</p>
  
        
		<p align="center" class="style1"><span class="txt_darkgrey"><i>&darr; Admin </i></span><span class="txt_orange">Masterlist</span> <em>&darr;</em></p>
		<p align="center" class="style1">&nbsp;</p>
		<table width="36%" border="1" align="center">
          <tr>
            <td bgcolor="#C5DFFA"><div align="center" class="style2 style4">USERNAME:</div></td>
            <td bgcolor="#C5DFFA"><div align="center" class="style3">PASSWORD:</div></td>
          </tr>
        </table>
		<?php echo $narence; ?>
		<p>&nbsp;</p>
		<p align="center" class="style1"></p>
	
		
<!-- validation-->
<script>
function validateForm() {
    var x = document.forms["form1"]["textfield"].value;
    if (x == "") {
        alert("username must be filled out");
        return false;
    }
	
	var x = document.forms["form1"]["textfield2"].value;
    if (x == "") {
        alert("password must be filled out");
        return false;
    }
	
	
}
</script>
  