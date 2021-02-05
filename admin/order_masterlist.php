
<?php

//connection
include ("../connection.php"); 

//restriction
include("restriction.php");


// for paid 
if(isset($_POST['paid']))
{
$a = $_POST['aa'];
$b = $conn->query("  UPDATE `orders` SET `status`= 'paid' WHERE id in (".implode($a).") ");
}    


//for expired
if(isset($_POST['expired']))
{
$a = $_POST['aa'];
$b = $conn->query("  UPDATE `orders` SET `status`= 'expired' WHERE id in (".implode($a).") ");
}   

//header
include("header.php"); 

// codes for displaying orders start 
$narence = "";
$r = $conn->query("select * from orders");
$c = $r->num_rows;
if($c > 0)
{
 while($row = $r->fetch_array())
   {
    $u = $row['username'];
    $p = $row['password'];
	$product_ordered = $row['product_ordered'];
	$quantity = $row['quantity'];
	$totalprice = $row['totalprice'];
    $status = $row['status'];
	$order_date = $row['order-date'];
	$datetoday = date('y-m-d'); //date now 
    $expdate = strtotime('+ 90 days',strtotime($row['order-date'])); // expdate 90 days. base from datafield orderdate NOT a variable
$diff = ($expdate - strtotime($datetoday)) / 86400; // expdate - datetoday to get the days remaining
	$narence .= '<table width="112%" border="1" align="center">
    <tr>
      <td width="10%" height="70" bgcolor="#EFEFEF"><div align="center" class="style4">'.$u.'</div></td>
      <td width="11%" bgcolor="#EFEFEF"><div align="center" class="style4">'.$p.'</div></td>
      <td width="22%" bgcolor="#EFEFEF"><div align="center" class="style4">'.$product_ordered.'</div></td>
      <td width="4%" bgcolor="#EFEFEF"><div align="center" class="style4">'.$quantity.'</div></td>
      <td width="5%" bgcolor="#EFEFEF"><div align="center" class="style4">'.$totalprice.'</div></td>
      <td width="8%" bgcolor="#EFEFEF"><div align="center" class="style4">'.$order_date.'</div></td>
      <td width="7%" bgcolor="#EFEFEF"><div align="center"><span class="style6 h1-home"><strong>'. date('y-m-d',($expdate)) .'</strong></span></div></td>
      <td width="6%" bgcolor="#EFEFEF"><div align="center" class="style4 style5">'.round($diff,0).'</div></td>
      <td width="7%" bgcolor="#EFEFEF"><div align="center" class="style4">'.$status.'</div></td>
      <td width="20%" bgcolor="#EFEFEF"><div align="center">
          <form action="" method="post" name="form2" id="form2">
            <span class="style6">
            <input name="aa[]" type="checkbox" id="aa[]" value="'.$row['id'].'" />
            </span>
            <input name="paid" type="submit" id="paid" value="paid" class="btn btn-primary" />
            <span class="style6">
            <label></label>
            </span>
            <input name="expired" type="submit" id="expired" value="expired" class="btn btn-primary" />
            <span class="style6">
            <label></label>
            </span>
          </form>
      </div></td>
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
.style4 {
	color: #000000;
	font-weight: bold;
}
.style5 {color: #0000FF}
.style6 {color: #000000}
-->
</style>

	 
  <p>&nbsp;</p>
  <p align="center"><span class="style1"><span class="txt_darkgrey"><i>&darr; Order </i></span><span class="txt_orange">Masterlist</span> <em>&darr;</em></span></p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <table width="112%" border="1" align="center">
    <tr>
      <td width="10%" height="70" bgcolor="#C5DFFA"><div align="center" class="style4">Username:</div></td>
      <td width="11%" bgcolor="#C5DFFA"><div align="center" class="style4">Password:</div></td>
      <td width="22%" bgcolor="#C5DFFA"><div align="center" class="style4">Product ordered: </div></td>
      <td width="4%" bgcolor="#C5DFFA"><div align="center" class="style4">Qty:</div></td>
      <td width="5%" bgcolor="#C5DFFA"><div align="center" class="style4">Total price: </div></td>
      <td width="8%" bgcolor="#C5DFFA"><div align="center" class="style4">Date ordered:</div></td>
      <td width="7%" bgcolor="#C5DFFA"><div align="center"><span class="style4">exp date/3 months </span></div></td>
      <td width="6%" bgcolor="#C5DFFA"><div align="center" class="style4">Days left:</div></td>
      <td width="7%" bgcolor="#C5DFFA"><div align="center" class="style4">Status:</div></td>
      <td width="20%" bgcolor="#C5DFFA"><div align="center"><span class="style4">Change Status:</span></div></td>
    </tr>
  </table>
  <?php echo $narence; ?>
  <p>&nbsp;</p>
  <p>&nbsp; </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><br>
  </p>
  <p>&nbsp;    </p>
  <p>&nbsp;</p>
 
        
        
		