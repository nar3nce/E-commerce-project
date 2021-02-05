
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
 $n = $_POST['textfield'];
 $p = $_POST['textfield2'];
 $d = $_POST['textarea'];
 $date = date('y-m-d');
 $r = $conn->query(" INSERT INTO `products` (`id`, `name`, `price`, `details`, `status`, `date_added`) VALUES (NULL, '$n', '$p', '$d', 'pending', '$date') ");
 $newname = "$n.jpg";
 move_uploaded_file( $_FILES['file']['tmp_name'], "../product_images/$newname");
 header("location: product_add.php"); 
 exit();
 
 
 
}//code for Adding new products end

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
  <p align="center" class="style1"><span class="txt_darkgrey"><i> &darr; Add new </i></span><span class="txt_orange">INVENTORY</span> <em>&darr;</em></p>
  <p align="center" class="style1">&nbsp;</p>
  <form id="form1" name="form1" method="post" action="" onsubmit="return validateForm()" enctype="multipart/form-data" >
    <table width="30%" height="149" border="0" align="center">
      <tr>
        <td width="32%"><div align="justify" class="style2">Product Name: </div></td>
        <td width="68%"><label>
          <input type="text" name="textfield" />
        </label></td>
      </tr>
      <tr>
        <td><div align="justify" class="style2">Product Price:</div></td>
        <td><input type="text" name="textfield2" /></td>
      </tr>
      <tr>
        <td><div align="justify" class="style2">Product Details:</div></td>
        <td><label>
          <textarea name="textarea"></textarea>
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
        <td><input type="submit" name="Submit" value="Submit" /></td>
      </tr>
    </table>
    <p align="center">&nbsp;</p>
  </form>
  <p>&nbsp; </p>
  <p>&nbsp;</p>
  
        

<!-- validation-->
<script>
function validateForm() {
    var x = document.forms["form1"]["textfield"].value;
    if (x == "") {
        alert("Product Name must be filled out");
        return false;
    }
	
	var x = document.forms["form1"]["textfield2"].value;
    if (x == "") {
        alert("Product Price must be filled out");
        return false;
    }
	
	var x = document.forms["form1"]["textarea"].value;
    if (x == "") {
        alert("Product Details must be filled out");
        return false;
    }
	
	var x = document.forms["form1"]["file"].value;
    if (x == "") {
        alert("please select an image");
        return false;
    }
	
	
}
</script>