<?php

//connection start
include("connection.php");

// Codes for Submitting messages to admin start
if(isset($_POST['Submit']))
{
$n = $_POST['textfield'];
$e = $_POST['textfield2'];
$m = $_POST['textarea'];
$date = date('y-m-d h-i-s');
$am_pm = date('A');
$sql = " INSERT INTO `message` (`id`, `name`, `email`, `message`, `date_message` , `am_pm`) VALUES ('NULL', '$n', '$e', '$m', '$date', '$am_pm')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
} // Codes for Submitting messages to admin end


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
?>
<!-- header end  -->

<!-- Contact start -->
        <div id="templatemo-contact">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header head_contact">
                        <div class="text-center style1">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey"><strong>CONTACT US</strong></span>
                            <hr class="team_hr team_hr_right hr_gray"/>
                        </div>
                    </div>

                  <div class="col-md-8">
                        <div class="templatemo-contact-map" id="map-canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.593859275651!2d120.99215751441685!3d14.622197280468168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b60edb0a309b%3A0xb64b0f9d235d9166!2s1472+Blumentritt+Rd%2C+Sampaloc%2C+Manila%2C+Metro+Manila!5e0!3m2!1sen!2sph!4v1489490848421" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>  
                        <div class="clearfix"></div></div>
                    <div class="col-md-4 contact_right">
						<p>Verisimilitude Corporation. </p> 
                        <p><img src="images/location.png" alt="icon 1" /><i>1472 Sampaloc, Blumentritt Street, <span class="txt_orange">Manila</span></i></p>
                        <p><img src="images/phone1.png"  alt="icon 2" />09-480-718-614</p>
                        <p><img src="images/globe.png" alt="icon 3" /><a class="link_orange" href="#"><span class="txt_orange">www.verisimilitude.com</span></a></p>
                        <form id="form1" name="form1" method="post" action="" >
						
                            <div class="form-group">
                                <input name="textfield"  class="form-control" placeholder="Your Name..." maxlength="40" required />
                            </div>
                            <div class="form-group">
                                <input name="textfield2" type="email" class="form-control" placeholder="Your Email..." maxlength="40" required />
                            </div>
                            <div class="form-group">
                                <textarea name="textarea"  class="form-control" style="height: 130px;" placeholder="Write down your message..." required ></textarea>
                            </div>
                            <button name="Submit" type="submit" class="btn btn-orange pull-right">SEND</button>
                        </form>
                        	
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- Contact end -->

<!-- footer start -->
<?php include("footer.html"); ?>
<!-- footer end  -->



<!-- validation-->
<script>
function validateForm() {
    var x = document.forms["form1"]["textfield"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
	
	var x = document.forms["form1"]["textfield2"].value;
    if (x == "") {
        alert("email must be filled out");
        return false;
    }
	
	var x = document.forms["form1"]["textarea"].value;
    if (x == "") {
        alert("message must be filled out");
        return false;
    }
}
</script>
</body>
</html>
