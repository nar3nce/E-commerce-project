
<?php

//connection
include ("../connection.php"); 

//restriction
include("restriction.php");

//header 
include("header.php"); 

// codes for displaying messages start 
$narence = "";
$a = "select * from message";
$r = $conn->query($a);

if($r->num_rows > 0)
{
 while($row = $r->fetch_array())
   {
    $id = $row['id'];
	$name = $row['name'];
	$email = $row['email'];
	$message = $row['message'];
	$date_message = $row['date_message'];
        $am_pm = $row['am_pm'];
	$narence .= ' 
  <table width="87%" border="1" align="center">
    <tr>
      <td width="18%" bgcolor="#EFEFEF"><div align="center"><strong>'.$name.'</strong></div></td>
      <td width="16%" bgcolor="#EFEFEF"><div align="center"><strong>'.$email.'</strong></div></td>
      <td width="48%" bgcolor="#EFEFEF"><div align="center"><strong>'.$message.'</strong></div></td>
      <td width="18%" bgcolor="#EFEFEF"><div align="center"><strong>'.date('L, F d, Y g:i: ', strtotime($date_message)). $am_pm.'</strong></div></td>
    </tr>
  </table>
	
	
	            ';
   }
}
else
{
 exit();
}  // codes for displaying messages end
?>
<style type="text/css">
<!--
.style1 {	font-weight: bold;
	font-size: xx-large;
}
.style7 {color: #0000FF; font-weight: bold; font-size: 18px; }
.style8 {color: #000000}
.style9 {color: #000000; font-weight: bold; font-size: 18px; }
-->
</style>

	 
  <p>&nbsp;</p>
  <p align="center"><span class="style1"><span class="txt_darkgrey"><i>&darr; View </i></span><span class="txt_orange">Messages</span> <em>&darr;</em></span></p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <table width="87%" border="1" align="center">
    <tr>
      <td width="18%" bgcolor="#C5DFFA"><div align="center" class="style9">Name:</div></td>
      <td width="16%" bgcolor="#C5DFFA"><div align="center" class="style7 style8">Email:</div></td>
      <td width="48%" bgcolor="#C5DFFA"><div align="center" class="style9">Message:</div></td>
      <td width="18%" bgcolor="#C5DFFA"><div align="center" class="style9">Date Submitted: </div></td>
    </tr>
  </table>
  <div align="center"><?php echo $narence; ?>
  </div>
  <p>&nbsp;</p>
  <p><br>
  </p>
  <p>&nbsp;    </p>
  <p>&nbsp;</p>
 
        
        
		