<!DOCTYPE html>
<html lang="en">
<head>
        <title>admin area</title>
        <meta name="keywords" content="" />
		<meta name="description" content="" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        
        <!-- main CSS -->
        <link href="../css/narence.css" rel='stylesheet' type='text/css'>

        <!-- link of classes -->
        <link href="../js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="../css/templatemo_style.css"  rel='stylesheet' type='text/css'>

        
        <style type="text/css">
<!--
.style2 {color: #0000FF}
-->
        </style>
</head>
    
<body>
<div class="templatemo-top-bar" id="templatemo-top">
            <div class="container">
                <div class="subheader">
                    <div id="phone" class="pull-left">
                      <p>Welcome: <span class="style2"><?php echo $_SESSION['username']; ?></span></p>
                  </div>
                    <div id="email" class="pull-right">
                            <a href="logout.php">Logout</a> </div>
                </div>
            </div>
        </div>
        
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
                                <a href="#" class="navbar-brand"><img src="../images/logo1.png" /></a>
                        </div>
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                                 <li><a href="index.php">HOME</a></li>
                                <li><a href="message.php">MESSAGES</a></li>
                                <li><a href="product_add.php">INVENTORY</a></li>
								<li><a href="product_list.php">PRODUCT</a></li>
								
								<li><a href="order_masterlist.php">ORDERS</a></li>
								<li><a href="add_user.php">USER</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!-- navigation bar end -->
            </div> <!-- /container -->
        </div> <!-- Index End -->
		
		</body>
</html>
        
        
		