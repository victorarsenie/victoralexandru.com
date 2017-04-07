<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="shortcut icon" href="../images/v.jpg">
	<link rel="stylesheet" type="text/css" href="../css/component.css" />
	<script src="../js/modernizr.custom.js"></script>

	<script type="text/javascript">

function validateForm()
{
	var fullname = document.forms["contactform"]["name"].value;
	var subj = document.forms["contactform"]["subject"].value;
	var msg = document.forms["contactform"]["message"].value;
	var mail = document.forms["contactform"]["email"].value;

	if(fullname == "")
	{
		document.getElementById("errorMessage").innerHTML="Name is empty!";

		return false;
	}

	else if(mail == "")
	{
		document.getElementById("errorMessage").innerHTML="Email is empty!";
		return false;
		
	}
	
	else if(subj == "")
	{
		document.getElementById("errorMessage").innerHTML="Subject is empty!";

		return false;
	}

	
	else if(msg == "")
	{
		document.getElementById("errorMessage").innerHTML="Message is empty!";
		return false;
		
	}
	
}

</script>
</head>
<body>

	<div class="wrapper">

		<?php 

		include("../header.html");

		 ?>
			<div class="head">
				<h1>Contact me</h1>
			</div><br>
			
			<div style="max-width:200px" class="wrapper_text2">
				<ul class="grid cs-style-1">
					<li>
						<figure>
							<img src="../images/phone.png" alt="phone">
							<figcaption>
								<h3 style="letter-spacing:2px">(+44)7761325279</h3>
								
							</figcaption>
						</figure>
					</li>
					
					<li>
						<figure>
							<img src="../images/email.png" alt="email">
							<figcaption>
								<h3 style="font-size:15px">victor.arsenie@yahoo.com</h3>
								
							</figcaption>
						</figure>
					</li>
				</ul>

			</div>

<?php 
if (!isset($_POST["submit"])){
 ?>

		<div class="wrapper_text2">	
			<section class="contact" id="contact">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12">
		                    <h2>Get in touch</h2>
		                </div>
		            </div>
		            
		            <div class="row">
		                <form method="post" onsubmit="return validateForm();" action="<?php echo $_SERVER["PHP_SELF"]; ?>" name="contactform" id="contactform">
		                    <div class="col-md-6"><p style="color:red" id = "errorMessage"></p>
		                        <fieldset>
		                        	
		                            <input name="name" type="text" id="name" size="30" placeholder="Name">
		                           
		                            <input name="email" type="email" id="email" size="30" placeholder="Email">
		                            
		                            <input name="subject" type="text" id="subject" size="30" placeholder="Subject">
		                            
		                        </fieldset>
		                    </div>
		                    <div class="col-md-6"><p></p>
		                        <fieldset>
		                            <textarea name="message" cols="40" rows="20" id="message" placeholder="Message"></textarea>
		                        </fieldset>
		                    </div>
		                    <div class="col-md-12">
		                        <fieldset>
		                            <button name="submit" type="submit" class="btn btn-lg" id="submit" value="Submit">Send Message</button>
		                        </fieldset>
		                    </div>
		                </form>
		            </div>
		        </div>
		    </section>
		</div>    

<?php 
}
else
{
$from = $_POST["name"];
$subj = $_POST["subject"];
$msg = $_POST["message"];
$mail = $_POST["email"];
if($from == "")
{
	echo "empty name";
}
else if($subj == "")
{
	echo "empty subject";
}

else if($msg == "")
{
	echo "empty message";

}


else
{
	mail("victor.arsenie@yahoo.com", "My website message, from: ".$mail." Subject: ".$subj, $from, $msg);

	echo "<p class='alert2' align=center>Thank you for contacting me!</p> ";
}
}
 ?>

			<div class="wrapper_text"><a href="#" class="scrollToTop">Scroll To Top^</a></div>
		
		 <div class="push"></div>
	</div>

		<?php 

		include("../footer.html");

		 ?>

	
	<script src="jquery/myjquery.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>