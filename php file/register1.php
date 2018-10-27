<?php
include 'function.php';
if(isset($_POST['logout']))
{
session_unset();
session_destroy();
}
if(session_check()==false)
{
   echo "<script> alert('Successfully Logout!');
    window.location.href='http://localhost/IWP_Project/html%20file/log.html';
    </script>";

}
?>
<html>
<head>
<link rel="icon" href="C:\xampp\htdocs\IWP_Project\images\a2.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="http://localhost/IWP_Project/cssfile/main1.css">

</head>

<body>
<nav style="width: 100%;">
<a href="hom1.php" style="margin-left: 65%;">Home</a>
<a href="log.html">Login</a>
<a href="register.html">Register</a>
<a href="price.php">Add To Cart</a>
<a href="contact.html">Contact Us</a>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="submit" name="logout" value="Logout" style="background-color: #ECD491; border-radius: 10px;">
</form>
</nav>
<div style="background-color:#F1F6F9;">
<h1 style="margin-left: 740px;">Fill to register</h1>
</div>
<form action="register.php" name="register" method="post" style="margin-left: 180px;">
<label style="margin-right: 50px;margin-left: 497px;">First Name</label>
<input type="text" name="fname" style="border-radius:5px;" required="required">
</br>
</br>
<label style="margin-right: 50px;margin-left: 500px;">Last Name</label>
<input type="text" name="lname" style="border-radius:5px;" required="required">
</br>
</br>
<label style="margin-left: 500px;margin-right: 57px;">Username</label>
<input type="email" name="username" style="border-radius:5px;" required="required">
</br>
</br>
<label style="margin-left: 500px;margin-right: 61px;">Password</label>
<input type="password" name="password" style="border-radius:5px;" required="required" title="Min of 6 lettes and one Capital and small letter is manadatory">
</br>
</br>
<label style="margin-left: 500px;margin-right: 3px;">Confirm Password</label>
<input type="password" name="cpassword" required="required" oninput="cpassword.value=password.value" style="border-radius:5px;">
</br>
</br>
<label style="margin-left: 500px;margin-right: 85px;">Email</label>
<input type="email" name="email" style="border-radius:5px;" required="required">
</br>
</br>
<label style="margin-left: 500px;margin-right: 30px;">ConfirmEmail</label>
<input type="email" name="confirmemail" oninput="confirmemail.value=email.value" style="border-radius:5px;" required="required">
</br>
</br>
<label style="margin-left: 500px;margin-right: 57px;" style="border-radius:5px;">Phone No</label>
<input type="number" name="number" style="border-radius:5px;" required="required">
</br>
</br>
<label style="margin-left: 500px;">Permanent Address</label>
<textarea rows="3" cols="22" name="address" placeholder="Address" style="margin-left: -2px;border-radius:5px;margin-top: 8px;" required="required"></textarea>
</br>
</br>
<label style="margin-left: 500px;margin-right: 68px;">Pincode</label>
<input type="number" name="pincode" style="border-radius:5px;" required="required">
</br>
</br>
</br>
<input type="submit" name="submit" value="Submit" style="margin-left: 640px;background-color:#F1F6F9">
<input type="reset" name="cancel" value="Cancel" style="background-color:#F1F6F9";>
</form>
</body>
</html>
<footer>
 <pre id="footer-text" style="margin-left: 50px;">Copyright &copy;DryfruitBasket</pre>
</footer>