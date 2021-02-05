
<?php

//connection
include ("../connection.php"); 

//restriction
include("restriction.php");


//header
include("header.php");

// codes for displaying products start 
$narence = "";
$sql = "select * from products order by id desc";
$r = $conn->query($sql);
 while($row = $r->fetch_array())
   {
    $id = $row['id'];
	$name = $row['name'];
	$details = $row['details'];
	$price = $row['price'];
	$status = $row['status'];
	$date_added = $row['date_added'];
	$narence .= '
	<table width="707" height="145" border="1" align="center">
      <tr>
        <td width="157" rowspan="2"><img src="../product_images/' . $name . '.jpg" width="180" height="141" /></td>
        <td width="297" height="66"><div align="center"><strong>'.$name.'</strong></div></td>
        <td width="231" rowspan="2"><form id="form2" name="form1" method="post" action="">
          <div align="center">
            <input name="aa[]" type="checkbox" id="aa[]" value="'.$id.'" />
            <input name="publish" type="submit" id="publish2" value="publish" class="btn btn-primary" />
            <input name="delete" type="submit" id="delete2" value="delete" class="btn btn-primary" />
        
          <a href="product_edit.php?id='.$id.'" class="btn btn-primary">edit</a></div>
        </form></td>
      </tr>
      <tr>
        <td height="30"><div align="center">
          <div align="center" class="style4 style5">'.$status.'</div>
        </div></td>
      </tr>
    </table>
	
  

	
	
	            ';
   }
  // codes for displaying products end


//codes for updating status start
if(isset($_POST['publish']))
{
$a = $_POST['aa'];
$sql = " UPDATE `products` SET `status`= 'published' WHERE id in (".implode($a).") ";
$conn->query($sql);
@header("location: product_list.php");
} 

if(isset($_POST['delete']))
{
$a = $_POST['aa'];
$sql = "  UPDATE `products` SET `status`= 'deleted' WHERE id in (".implode($a).") ";
$conn->query($sql);
@header("location: product_list.php");
} //codes for updating status end 
 
?>
<style type="text/css">
<!--
.style1 {	font-weight: bold;
	font-size: xx-large;
}
.style4 {
	font-size: 18px;
	font-weight: bold;
}
.style5 {
	color: #0000FF;
	font-size: 14px;
}
-->
</style>
	 
  <p>&nbsp;</p>
  <p align="center"><span class="style1"><span class="txt_darkgrey"><i>&darr; Manage </i></span><span class="txt_orange">Products</span> <em>&darr;</em></span></p>
  <p align="center">&nbsp;</p>
  <div align="center">
    
    <p><?php echo $narence; ?></div>
  
 
        
        
		