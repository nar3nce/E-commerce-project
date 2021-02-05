<?php

//connection start
include("connection.php");


// codes for displaying dynamic products start 
$narence = "";
$q = "select * from products where status ='published' order by id desc limit 10";
$r = $conn->query($q);
if($r->num_rows > 0)
{
 while($row = $r->fetch_array())
   {
    $id = $row['id'];
	$name = $row['name'];
	$details = $row['details'];
	$price = $row['price'];
	$date_added = $row['date_added'];
	$narence .= ' 
	
	                    <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-graphic" >
                            <a  href="productdetails.php?id='.$id.'" data-group="gallery-graphic">
                                <div class="templatemo-project-box">

                                    <img src="product_images/' . $name . '.jpg" class="img-responsive" alt="gallery" />

                                    <div class="project-overlay">
                                        <h5>'.$name.'</h5>
                                        <hr />
                                        <h4>P'.$price.'</h4>
                                    </div>
                                </div>
                            </a>
                        </li> 
				';
   }
}
else
{
 $narence = "No Products yet :(";
}  // codes for displaying dynamic products end
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>verisimilitude</title>
</head>

<!-- main CSS -->
<link href="css/narence.css" rel='stylesheet' type='text/css'>

<!-- link of classes -->
<link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
<link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>

<body>
<!-- header start -->
<?php 
session_start();
include("restriction.php"); 
?><!-- header end  -->

<!-- Products start -->
        <div id="templatemo-portfolio" >
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header" >
                        <div class="text-center style2">
                            <hr class="team_hr team_hr_left hr_gray"/>
                            <span class="txt_darkgrey">Latest Products</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="templatemo-gallery-category" style="font-size:16px; margin-top:80px;">
                        <div class="text-center"></div>
                    </div>
                </div> <!-- /.row -->


                <div class="clearfix"></div>
                <div class="text-center">
                <ul class="templatemo-project-gallery" >
                  <?php echo $narence; ?>
                </ul>
                </div>
                <div class="clearfix"></div>
                
            </div><!-- /.container -->
        </div> <!-- Products End -->


<!-- footer start -->
<?php include("footer.html"); ?>
<!-- footer end  -->

</body>
</html>
