
<?php

//connection
include ("../connection.php"); 

//restriction
include("restriction.php");


//header
include("header.php");

//code for Adding new products start

if(isset($_POST['Submit']))
{
 $id = $_POST['id'];
 $n = $_POST['textfield'];
 $p = $_POST['textfield2'];
 $d = $_POST['textarea'];
 $date = date('y-m-d');
 $r = $conn->query(" UPDATE `products` SET `name` = '$n', `price` = '$p', `details` = '$d', `date_added` = '$date' WHERE `products`.`id` = '$id'");
 if ($_FILES['file']['tmp_name'] != "") {
	    // Place image in the folder 
	    $newname = "$id.jpg";
	    move_uploaded_file($_FILES['file']['tmp_name'], "../product_images/$newname");
	}
	header("location: product_list.php"); 
    exit();
 
 
 
 
}//code for Adding new products end

//codes for displaying start
if(isset($_GET['id']))
{
 $id = $_GET['id'];
 $r = $conn->query("select * from products where id = '$id' ");
 $c = $r->num_rows;
  if($c > 0)
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
.style3 {color: #0000FF}
-->
</style>

	 
  <p>&nbsp;</p>
  <p align="center" class="style1"><span class="txt_darkgrey"><i> &darr; Edit </i></span><span class="txt_orange">Products</span> <em>&darr;</em></p>
  <p align="center" class="style1">&nbsp;</p>
  <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <table width="30%" height="149" border="0" align="center">
      <tr>
        <td width="32%"><div align="justify" class="style2">Product Name: </div></td>
        <td width="68%"><label>
          <input name="textfield" type="text" value="<?php echo $name ?>" />
        </label></td>
      </tr>
      <tr>
        <td><div align="justify" class="style2">Product Price:</div></td>
        <td><input name="textfield2" type="text" value="<?php echo $price ?>" /></td>
      </tr>
      <tr>
        <td><div align="justify" class="style2">Product Details:</div></td>
        <td><label>
          <textarea name="textarea"><?php echo $details ?></textarea>
        </label></td>
      </tr>
      <tr>
        <td><div align="justify" class="style2">Product Image:</div></td>
        <td><label>
          <input type="file" name="file" />
        </label></td>
      </tr>
      <tr>
        <td height="26">&nbsp;</td>
        <td><label>
        <input name="id" type="hidden" value="<?php echo $id; ?>" />
        <input type="submit" name="Submit" value="Submit" />
        </label>
        </td>
      </tr>
    </table>
    <p align="center">&nbsp;</p>
  </form>
  <p>&nbsp; </p>
  <p>&nbsp;</p>
  
        
		