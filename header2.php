<!--header start -->
<style type="text/css">
<!--
.style3 {
	color: #0000FF;
	font-weight: bold;
}
-->
</style>

<div class="templatemo-top-bar" id="templatemo-top">
            <div class="container">
                <div class="subheader">
                    <div id="phone" class="pull-left" style="color:#FF0000">
                     
                    welcome: <span class="style3"><?php echo $_SESSION['u']; ?></span>                    </div>
                    <div id="email" class="pull-right" style="color:#FF0000">
                            <a href="register.php"></a> <a href="logout.php">Logout</a> </div>
                </div>
            </div>
</div>
        
        <!-- Index start -->
        
        <div class="templatemo-top-menu">
            <div class="container">
                <!-- navigation bar start -->
                <div class="navbar" role="navigation">
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
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="product.php">PRODUCT</a></li>
                                <li><a href="developers.php">DEVELOPERS</a></li>
                                <li><a href="contact.php">CONTACT</a></li>
								<li><a href="cart.php">CART</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!-- navigation bar end -->
            </div> <!-- /container -->
        </div> <!-- Index End -->
		<!--header end -->
