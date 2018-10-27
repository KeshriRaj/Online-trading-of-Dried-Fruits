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

<!Doctype.html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.icon:hover
  {
    color: red;
  }
	.column {
    float: left;
    width: 45%;
    padding: 15px;
}
.row::after {
    content: "";
    clear: both;
    display: table;
}

.colu {
    float: left;
    width: 45%;
    padding: 15px;
}
.ro::after {
    content: "";
    clear: both;
    display: table;
}
</style>
<title>fit-bit</title>
<link rel="icon" href="C:\xampp\htdocs\IWP_Project\images\a2.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="http://localhost/IWP_Project/cssfile/main1.css">

<head>
<body>
<nav style="width: 100%;">
<a href="home.html" style="margin-left: 65%;">Home</a>
<a href="log.html">Login</a>
<a href="register.html">Register</a>
<a href="wishlist.html">Wishlist</a>
<A href="contact.html">Contact Us</a>
<input type="submit" name="logout" value="Logout" style="background-color: #ECD491; border-radius: 10px;">
</nav>
<div class="i1">
<img src="http://localhost/IWP_Project/images/home4.jpg" alt="Dryfruits" style="width:100%;height:760px;border-radius: 20px;">
</div>
<div>
<form>
<br>
<textarea rows="2" cols="100" class="name" placeholder="Enter your dryfruits" style="margin-left: 500px;border-radius: 10px;border-color: blue;"></textarea>
</br>
<input type="button" value="Submit" style="border-radius: 10px;margin-left: 815px;">
</form>
<nav style="width: 100%;">
<a href="nuts.html" style="margin-left: 700px;">DRY FRUITS</a>
<a href="spices.html" style="margin-left: 80px;">SPICES</a>
</nav>
<div class="row" style="background-color:#F1F6F9">

  <div class="column">
    <img src="http://localhost/IWP_Project/images/cashew.jpg" alt="Snow" style="width:100%;">
    <figcaption style="margin-left: 250px;"><h1>Cashews&nbsp&nbsp<i class="fa fa-heart-o icon" aria-hidden="true"></i></h1>
    <form method="post" action="price.php" name="price">
    <label>Rs:840 per kg</label>
    </br>
    <input type="number" name="cashew" placeholder="Enter weight in gm">
    <button type="submit" class="btn">BUY NOW</button>
    </form>
    </figcaption>
  </div>

  <div class="column">
    <img src="http://localhost/IWP_Project/images/badam.jpg" alt="Forest" style="width:100%; margin-left: 100px;">
    <figcaption style="margin-left: 250px;"><h1>Almonds&nbsp&nbsp<i class="fa fa-heart-o icon" aria-hidden="true"></i></h1>
      <form method="post" action="price.php" name="price">
    <label>Rs:740 per kg</label>
    </br>
    <input type="number" name="cashew" placeholder="Enter weight in gm">
    <button type="submit" class="btn">BUY NOW</button>
    </form>
  </div>

  <div class="column">
    <img src="http://localhost/IWP_Project/images/pist.jpg" alt="Forest" style="width:100%;">
    <figcaption style="margin-left: 250px;"><h1>Pistachios&nbsp&nbsp<i class="fa fa-heart-o icon" aria-hidden="true"></i></h1>
    <form method="post" action="price.php" name="price">
    <label>Rs:1040 per kg</label>
    </br>
    <input type="number" name="cashew" placeholder="Enter weight in gm">
    <button type="submit" class="btn">BUY NOW</button>
    </form>
    </figcaption>
  </div>

  <div class="column">
    <img src="http://localhost/IWP_Project/images/kishmish.jpg" alt="Forest" style="width:100%;margin-left: 100px;">
    <figcaption style="margin-left: 250px;"><h1>Raisins&nbsp&nbsp<i class="fa fa-heart-o icon" aria-hidden="true"></i></h1>
  <form method="post" action="price.php" name="price">
    <label>Rs:280 per kg</label>
    </br>
    <input type="number" name="cashew" placeholder="Enter weight in gm">
    <button type="submit" class="btn">BUY NOW</button>
    </form>
  </figcaption>
  </div>
  </div>

  <div class="ro" style="background-color:#F1F6F9;">
   <div class="colu">
    <img src="http://localhost/IWP_Project/images/dates.jpg" alt="Forest" style="width:100%;">
    <figcaption style="margin-left: 250px;"><h1>Dates&nbsp&nbsp<i class="fa fa-heart-o icon" aria-hidden="true"></i></h1>
      <form method="post" action="price.php" name="price">
    <label>Rs:160 per kg</label>
    </br>
    <input type="number" name="cashew" placeholder="Enter weight in gm">
    <button type="submit" class="btn">BUY NOW</button>
    </form>
    </figcaption>
  </div>

  <div class="colu">
    <img src="http://localhost/IWP_Project/images/walnut.jpg" alt="Forest" style="width:100%;margin-left: 100px;">
    <figcaption style="margin-left: 250px;"><h1>Walnuts&nbsp&nbsp<i class="fa fa-heart-o icon" aria-hidden="true"></i></h1>
      <form method="post" action="price.php" name="price">
    <label>Rs:880 per kg</label>
    </br>
    <input type="number" name="cashew" placeholder="Enter weight in gm">
    <button type="submit" class="btn">BUY NOW</button>
    </form>
    </figcaption>
  </div>
</div>
<footer>
 <pre id="footer-text" style="margin-left: 100px;">Copyright &copy;DryfruitBasket</pre>
</footer>
</body>

</html>