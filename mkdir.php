
<?php



if(isset($_POST['Submit']))
{
 $u =  $_POST['textfield'];

if(file_exists($u))
{
echo "sorry file already exists";
}
else
{
$m = mkdir($u);
}

}


if(isset($_POST['Submit2']))
{
 $u =  $_POST['textfield2'];


if(!file_exists($u))
{
echo "no files found";
}
else
{
rmdir($u);
}
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
.style3 {color: #000000; font-weight: bold; }
.style4 {color: #000000}
-->
</style>

	 
  <p align="center" class="style1"><span class="txt_darkgrey"><i> &darr;create directory</i></span><em>&darr;</em></p>
  <p align="center" class="style1">
  <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data" >
    <p align="center">
      <input name="textfield" type="text" maxlength="asdas" required />
    </p>
    <p align="center">
      <input name="Submit" type="submit" value="Add" />
    </p>
  
  </form>
  </p>
  
  <p align="center"><span class="style1"><span class="txt_darkgrey"><i>&darr;remove directory</i></span><em>&darr;</em></span></p>
  <form id="form1" name="form1" method="post" action="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" enctype="multipart/form-data" >
    <p align="center">
      <input name="textfield2" type="text" maxlength="asdas" required />
    </p>
    <p align="center">
      <input name="Submit2" type="submit" id="Submit2" value="Add" />
    </p>
  
  </form><p align="center" class="style1"></p>
	
		
  