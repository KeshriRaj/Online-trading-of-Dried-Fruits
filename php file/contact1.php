<html>
<head>
<style type="text/css">
	.details
	{
     display: flex;

    }
    .detail
    {
    	background-color:#F1F6F9;
    	border-radius: 20px;
    }
</style>
<link rel="icon" href="C:\xampp\htdocs\IWP_Project\images\a2.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="http://localhost/IWP_Project/cssfile/main1.css">
</head>
<body>
<nav style="width: 100%;">
<a href="hom1.php" style="margin-left: 65%;">Home</a>
<a href="log.html">Login</a>
<a href="register1.php">Register</a>
<a href="price.php">Add To Cart</a>
<a href="contact1.php">Contact Us</a>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="submit" name="logout" value="Logout" style="background-color: #ECD491; border-radius: 10px;">
</form>
</nav>
<section class="cont" style="border-radius: 20px;">
<div class="details">
<div>
<img src="C:\xampp\htdocs\IWP_Project\images\ga.jpg" style="width: 380px;height: 380px;margin-left: 100px;margin-top: 15px;border-radius: 10px;">
</div>
<div>
<div style="margin-left: 350px;">
<h1> Say Hello!</h1>
<p>Have any feedback or query? We would be glad to assist you with your concern. Or go through our FAQ's and save time!</p>
</div>
</br>
<form style="margin-left:350px;" name="contact" action="contact.php">
<fieldset>
	<input type="text" name="name" placeholder="Name" required="required">
	</br>
	</br>
	<input type="email" name="email1" placeholder="Email" required="required">
	</br>
	</br>
    <input type="text" name="Phone" placeholder="Number" required="required" pattern="[0-9]{10}" title="10 digit mobile no.">
    </br>
    </br>
    <textarea rows="5" cols="50" name="comment" placeholder="Feedback" required="required"></textarea>
  </fieldset>
  </br>
  <input type="submit" name="submit" value="Submit">
  <input type="reset" name="cancel" value="Resest">
  </br>
  </br>
</form>
</div>
</section>
<form>
<fieldset class="detail">
  <div class="details">
  <div style="margin-left:300px;">
	<h2>CONTACT</h2>
	<p>8789056433</p>
	<p>kuanlkeshri047@gmail.com</p>
  </div>
  <div style="margin-left:250px;">	
  	<h2>REGISTERED ADDRESS</h2>
	<p>Sujaganj</p>
	<p>Bihar-812005</p>
  </div>
  <div style="margin-left:250px;">	
	<h2>WORKING HOURS</h2>
	<p>Monday-Saturday</p>
	<p>9am-9pm</p>
  </div>
  </div>
</fieldset>
<footer>
 <pre id="footer-text" style="margin-left: 100px;">Copyright &copy;DryfruitBasket</pre>
</footer>