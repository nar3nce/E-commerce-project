<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>verisimilitude</title>
<style type="text/css">
<!--
.style1 {color: #000000}
.style2 {color: #FFFFFF; }
.style4 {
	font-size: 12px;
	color: #000000;
	font-weight: bold;
}
-->
</style>
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
?>
<!-- header end  -->

        <div>
            <!-- Carousel start -->
  <div id="carousel1" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner" role="listbox">
    <div class="item active"><img src="carousel/R6547_Women_Main-Banner-1_Dorothy-Perkins-New-Arrivals_15032017.jpg"alt="First slide image" class="center-block" />
      
    </div>
    <div class="item "><img src="carousel/R6530_Women_Main-Slider-3_International-Brand_14032017.jpg"alt="First slide image" class="center-block" />
      
    </div>
  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
          </div><!-- carousel end -->
        </div>

        <div class="templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class="templatemo-slogan text-center">
              <span class="txt_darkgrey"><i>Welcome</i> to </span><span class="txt_orange"><strong>Verisimilitude</strong></span>              </div>	
            </div>
        </div>
        
		<!-- info about company start -->
        <div class="templatemo-service">
            <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="templatemo-service-item">
                      <div><img src="icons/Enter Pin Filled-50.png" width="50" height="50" /><span class="templatemo-service-item-header style1"> EASY TO BUY </span></div>
                      <p><span class="style4">User friendly, easy navigation and functionality </span></p>
                      <div class="text-center"> <a href="product.php" 
                                	class="templatemo-btn-read-more btn btn-orange">BUY NOW</a> </div>
                      <br class="clearfix"/>
                    </div>
                  </div>
                  <div class="col-md-4">
                        <div class="templatemo-service-item">
                            <div>
                                <img src="icons/Idea Filled-50.png" alt="icon" width="50" height="50"/>
                                <span class="templatemo-service-item-header style1">LOW PRICE</span>                            </div>
							<p><span class="style4">Low price Products, high quality and durable</span></p>
                            <div class="text-center">
                                <a href="product.php" 
                                	class="templatemo-btn-read-more btn btn-orange">BUY NOW</a>                            </div>
                            <br class="clearfix"/>
                        </div>
                        
                  </div>
                    
                    <div class="col-md-4">
                        <div class="templatemo-service-item">
                            <div>
                                <img src="icons/Lock Filled-50.png" alt="icon" width="50" height="50"/>
                                <span class="templatemo-service-item-header style1">SECURED</span></div>
                            <p><span class="style4">validation, restriction, for data management</span></p>
                            <div class="text-center">
                                <a href="product.php" 
                                	class="templatemo-btn-read-more btn btn-orange">BUY NOW</a>                            </div>
                            <br class="clearfix"/>
                        </div>
                        <br class="clearfix"/>
                    </div>
              </div>
            </div>
        </div> <!-- info about company end -->

<!-- footer start -->
<?php include("footer.html"); ?>
<!-- footer end  -->
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
</body>
</html>
