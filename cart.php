<?php
session_start();
//connection
include ("connection.php");

//restriction of ordering
if (!isset($_SESSION["u"])) {

echo ' Please register to order <a href="register.php">Click Here</a>';
exit();

}


							   
//codes for adding items in the cart
if (isset($_POST['id'])) {
    $id = $_POST['id'];
	$wasFound = false;
	$i = 0;
	// If the cart session variable is not set or cart array is empty
	if (!isset($_SESSION["cart_array"]) || count($_SESSION["cart_array"]) < 1) { 
	    // RUN IF THE CART IS EMPTY OR NOT SET
		$_SESSION["cart_array"] = array(0 => array("item_id" => $id, "quantity" => 1));
	} else {
		// RUN IF THE CART HAS AT LEAST ONE ITEM IN IT
		foreach ($_SESSION["cart_array"] as $each_item) { 
		      $i++;
		      while (list($key, $value) = each($each_item)) {
				  if ($key == "item_id" && $value == $id) {
					  // That item is in cart already so let's adjust its quantity using array_splice()
					  array_splice($_SESSION["cart_array"], $i-1, 1, array(array("item_id" => $id, "quantity" => $each_item['quantity'] + 1)));
					  $wasFound = true;
				  } // close if condition
		      } // close while loop
	       } // close foreach loop
		   if ($wasFound == false) {
			   array_push($_SESSION["cart_array"], array("item_id" => $id, "quantity" => 1));
		   }
	}
	header("location: cart.php"); 
    exit();
}


//codes for resetting the items in the cart

if (isset($_GET['action']) && $_GET['action'] == "empty") {
    unset($_SESSION["cart_array"]);
}



//codes for displaying the cart

$cartOutput = "";
$cartTotal =""; 
$carttotalname = "";
$cartquantity = "";

if (!isset($_SESSION["cart_array"]) || count($_SESSION["cart_array"]) < 1) {
    $cartOutput = "<h2 align='center'>Your shopping cart is empty</h2>";
} else {

	// Start the For Each loop
	$i = 0; 
    foreach ($_SESSION["cart_array"] as $each_item) {
		$item_id = $each_item['item_id'];
		$sql = $conn->query("SELECT * FROM products WHERE id='$item_id' LIMIT 1");
		while ($row = $sql->fetch_array()) {
			$id = $row["id"];
			$name = $row["name"];
			$price = $row["price"];
			$details = $row["details"];
		}
		$pricetotal = $price * $each_item['quantity'];
		@$cartTotal = $pricetotal + $cartTotal;
		$carttotalname .= $name;
		$cartquantity .= $each_item['quantity'];	
		
		$cartOutput .= '
		
<table width="456" border="2" align="center" cellpadding="6" cellspacing="0">
    <tr>
      <td width="47%" rowspan="3" bgcolor="#EFEFEF"><img src="product_images/'.$name.'.jpg" width="197" height="183" /></td>
      <td width="53%" height="76" align="right" valign="top" bgcolor="#EFEFEF"><form id="form1" name="form1" method="post" action="cart.php">
        <label>
        <input type="hidden" name="index_to_remove" value="' . $i . '" />
        <input type="submit" name="SubmitdeleteBtn' . $item_id . '" value="remove" />
        <br />
        <br />
        </label>
      </form>
        <div align="center">
          <form action="cart.php" method="post" id="2">
            <input name="quantity" type="text" value="' . $each_item['quantity'] . '" size="2" maxlength="2" />
            <input name="adjustBtn' . $item_id . '" type="submit" value="change quantity" />
            <input name="item_to_adjust" type="hidden" value="' . $item_id . '" />
          </form>
        </div>
        <tr>
      <td height="77" bgcolor="#EFEFEF"><div align="center"><span class="style4">Product Price:</span> <span class="style6 style1">'.$price.'</span></div></td>
    </tr>
    <tr>
      <td rowspan="2" bgcolor="#EFEFEF"><div align="center"><span class="style4">Total price:</span> <span class="style4">P</span><span class="style7 style1">'.$pricetotal.'</span> </div></td>
    </tr>
    <tr>
      <td bgcolor="#EFEFEF"><div align="center" class="style7 style1">'.$name.'</div></td>
    </tr>
  </table>		
		
		';
		$i++; 
    } 
	
}



//codes for udjusting the quantity of items in the cart

if (isset($_POST['item_to_adjust']) && $_POST['item_to_adjust'] != "") {
    // execute some code
	$item_to_adjust = $_POST['item_to_adjust'];
	$quantity = $_POST['quantity'];
	$quantity = preg_replace('#[^0-9]#i', '', $quantity); // filter everything but numbers
	if ($quantity >= 100) { $quantity = 99; }
	if ($quantity < 1) { $quantity = 1; }
	if ($quantity == "") { $quantity = 1; }
	$i = 0;
	foreach ($_SESSION["cart_array"] as $each_item) { 
		      $i++;
		      while (list($key, $value) = each($each_item)) {
				  if ($key == "item_id" && $value == $item_to_adjust) {
					  // That item is in cart already so let's adjust its quantity using array_splice()
					  array_splice($_SESSION["cart_array"], $i-1, 1, array(array("item_id" => $item_to_adjust, "quantity" => $quantity)));
				  } // close if condition
		      } // close while loop
	} // close foreach loop
	@header("location: cart.php");
}



//codes for removing a item in the cart

if (isset($_POST['index_to_remove']) && $_POST['index_to_remove'] != "") {
    // Access the array and run code to remove that array index
 	$key_to_remove = $_POST['index_to_remove'];
	if (count($_SESSION["cart_array"]) <= 1) {
		unset($_SESSION["cart_array"]);	} else {
		unset($_SESSION["cart_array"]["$key_to_remove"]);
		sort($_SESSION["cart_array"]);
	}
			@header("location: cart.php");

}


//codes for submitting order 

if(isset($_POST['Submitorder']))
{
$porder = preg_replace('#[^A-Za-z0-9]#i', '', $_POST['hiddenField']);
$quantity = preg_replace('#[^A-Za-z0-9]#i', '', $_POST['hiddenField2']);
$totalprice = preg_replace('#[^A-Za-z0-9]#i', '', $_POST['hiddenField3']);
$u = preg_replace('#[^A-Za-z0-9]#i', '', $_POST['hiddenField4']);
$p = preg_replace('#[^A-Za-z0-9]#i', '', $_POST['hiddenField5']);
$date = date('y-m-d');
$r = $conn->query("  INSERT INTO `verisimilitude_corp`.`orders` (`id`, `username`, `password`, `product_ordered`, `quantity`, `totalprice`, `status`, `order-date`) VALUES (NULL, '$u', '$p', '$porder', '$quantity', '$totalprice', 'pending', '$date') ");
unset($_SESSION["cart_array"]);
@header("location: cart.php");
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
<div class="templatemo-top-bar" id="templatemo-top">
            <div class="container">
                <div class="subheader">
                    <div id="phone" class="pull-left">
                            <img src="images/phone.png" alt="phone"/>
                            094-80-718-614
                    </div>
                    <div id="email" class="pull-right">
                            <img src="images/email.png" alt="email"/>
                            verisimilitude@gmail.com
                    </div>
                </div>
            </div>
</div>
<div class="container">       
        <!-- Index start -->
        
        <div class="templatemo-top-menu">
            <div class="container">
                <!-- navigation bar start -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a href="#" class="navbar-brand"><img src="images/logo1.png" /></a>
                        </div>
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                                <li class="active"><a href="product.php#templatemo-portfolio">BACK</a></li>
                               
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!-- navigation bar end -->
            </div> <!-- /container -->
        </div> <!-- Index End -->
 <p>&nbsp;</p>
  <p align="center"><span class="h1"><span class="txt_darkgrey"><i>&darr; Cart </i></span><span class="style10">Details</span> <em>&darr;</em></span></p>
  <p align="center">&nbsp;</p>
  <table width="456" border="1" align="center">
    <tr>
      <td height="32" bgcolor="#C5DFFA"><div align="center" class="style4"><a href="cart.php?action=empty" class="style9">Click here to empty your cart </a></div></td>
    </tr>
  </table>
  <div align="center"><?php echo $cartOutput; ?>
  </div>
  <div align="center"></div>
  <div align="center">
    <form id="form1" name="form1" method="post" action="" onsubmit="return validateForm()" enctype="multipart/form-data" >
      <table width="456" border="1" align="center">
        <tr>
          <td height="32" bgcolor="#C5DFFA"><div align="center"><span class="style4">TOTAL CART PRICE: P<span class="style8"><?php echo $cartTotal; ?> </span> </span></div></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p align="center">
        <label>
		
        <input type="hidden" name="hiddenField"  value="<?php echo $carttotalname; ?>"/>
        <input type="hidden" name="hiddenField2" value="<?php echo $cartquantity; ?>" />
        <input type="hidden" name="hiddenField3" value="<?php echo $cartTotal; ?>" />
        <input type="hidden" name="hiddenField4" value="<?php echo $_SESSION['u']; ?>"/>
        <input type="hidden" name="hiddenField5" value="<?php echo $_SESSION['p']; ?>"/>
        <input name="Submitorder" type="submit" id="Submitorder" value="Submit Order" />
        </label>
      </p>
    </form>
  </div>
  <div class="text-center"></div>
</div>
<!-- footer start -->
<?php include("footer.html"); ?>
<!-- footer end  -->



<!-- validation-->
<script>
function validateForm() {
	
	var x = document.forms["form1"]["hiddenField"].value;
    if (x == "") {
        alert("Your shopping cart is empty");
        return false;
    }
	
	var x = document.forms["form1"]["hiddenField2"].value;
    if (x == "") {
        alert("Your shopping cart is empty");
        return false;
    }
	
	var x = document.forms["form1"]["hiddenField3"].value;
    if (x == "") {
        alert("Your shopping cart is empty");
        return false;
    }
}
</script>


</body>
</html>
