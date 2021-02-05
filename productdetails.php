<?php
//connection
include ("connection.php");

//codes for displaying start
if(isset($_GET['id']))
{
 $id = $_GET['id'];
 $q = "select * from products where id = '$id' ";
 $r = $conn->query($q);
  if($r->num_rows > 0)
   {
    while($row = $r->fetch_array())
	 {
	  $id = $row['id'];
	  $name = $row['name'];
	  $details = $row['details'];
	  $price = $row['price'];
	 }
   }
   else
   { 
    exit();
   }
}
else
{
 exit();
}



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $name; ?></title>
        <!-- main CSS -->
        <link href="css/narence.css" rel='stylesheet' type='text/css'>

        <!-- link of classes -->
        <link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
<link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>

<style type="text/css">
<!--
.style1 {
	font-weight: bold;
	font-size: 36px;
}
.style2 {color: #000000}
.style3 {font-weight: bold}
.style4 {font-weight: bold}
.style5 {
	color: #000000;
	font-weight: bold;
	font-size: 12px;
}
.style6 {font-size: 36px}
-->
</style>
</head>

<body>
<!-- header start -->
<?php 
session_start();
include("restriction.php"); 
?>
<!-- header end  -->
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
  <p align="center"><span class="style1"><span class="txt_darkgrey"><i>&darr; Product </i></span><span class="txt_orange">Details</span> <em>&darr;</em></span></p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
                  <table width="46%" height="287" border="1" align="center">
                    <tr>
                      <td width="18%" rowspan="3"><img src="product_images/<?php echo $name; ?>.jpg" width="257" height="301" /></td>
                      <td width="82%"><div align="center"><span class="style2"><strong>Name:</strong> <?php echo $name; ?></span></div></td>
                    </tr>
                    <tr>
                      <td><div align="justify" class="style3">
                        <div align="center"><span class="style2"><strong>Price:</strong></span> P<span class="style4"><?php echo $price; ?></span></div>
                      </div></td>
                    </tr>
                    <tr>
                      <td valign="top"><div align="center"><span class="style2"><span class="style5">Details:</span> <?php echo $details; ?></span></div></td>
                    </tr>
</table>
                 
                  <p>&nbsp;</p>
                  <div class="text-center">
				  <form id="form1" name="form1" method="post" action="cart.php">
                  <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
                  <input type="submit" name="button" id="button" class="templatemo-btn-read-more btn btn-orange" value="Add to Shopping Cart" />
                  </form>
                  </div></div>
<!-- footer start -->
<?php include("footer.html"); ?>
<!-- footer end  -->
</body>
</html>
