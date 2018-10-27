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
    window.location.href='http://localhost/IWP_Project/php%20file/log.html';
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<body>
<nav style="width: 100%;">
<a href="hom1.php" style="margin-left: 65%;">Home</a>
<a href="log.html">Login</a>
<a href="register1.php">Register</a>
<a href="price.php">Add To Cart</a>
<A href="contact1.php">Contact Us</a>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="submit" name="logout" value="Logout" style="background-color: #ECD491; border-radius: 10px;">
</form>
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




<form method="post" action="pricesql.php" name="price1">
  <div class="column">
    <img src="http://localhost/IWP_Project/images/cashew.jpg" alt="Snow" style="width:100%;">
    <figcaption style="margin-left: 250px;"><h1>Cashews&nbsp&nbsp(&#8377 840 per kg)</h1>
    <input type="number" name="d1" placeholder="Enter weight in gm">
    <button type="submit" class="btn">ADD TO CART<i class="fa fa-shopping-cart" aria-hidden="true"></i> </button>
    
    </figcaption>
  </div>

  <div class="column">
    <img src="http://localhost/IWP_Project/images/badam.jpg" alt="Forest" style="width:100%; margin-left: 100px;">
    <figcaption style="margin-left: 250px;"><h1>Almonds&nbsp&nbsp(&#8377 740 per kg)</h1>
    <input type="number" name="d2" placeholder="Enter weight in gm">
    <button type="submit" class="btn">ADD TO CART<i class="fa fa-shopping-cart" aria-hidden="true"></i> </button>
    
      </div>

  <div class="column">
    <img src="http://localhost/IWP_Project/images/pist.jpg" alt="Forest" style="width:100%;">
    <figcaption style="margin-left: 250px;"><h1>Pistachios&nbsp&nbsp(&#8377 1040 per kg)</i></h1>
    <input type="number" name="d3" placeholder="Enter weight in gm">
    <button type="submit" class="btn">ADD TO CART<i class="fa fa-shopping-cart" aria-hidden="true"></i> </button>
    
    
    </figcaption>
  </div>

  <div class="column">
    <img src="http://localhost/IWP_Project/images/kishmish.jpg" alt="Forest" style="width:100%;margin-left: 100px;">
    <figcaption style="margin-left: 250px;"><h1>Raisins&nbsp&nbsp(&#8377 280 per kg)</h1>
    <input type="number" name="d4" placeholder="Enter weight in gm">
    <button type="submit" class="btn">ADD TO CART<i class="fa fa-shopping-cart" aria-hidden="true"></i> </button>
    
    
  </figcaption>
  </div>
  </div>

  <div class="ro" style="background-color:#F1F6F9;">
   <div class="colu">
    <img src="http://localhost/IWP_Project/images/dates.jpg" alt="Forest" style="width:100%;">
    <figcaption style="margin-left: 250px;"><h1>Dates&nbsp&nbsp(&#8377 160 per kg)</h1>
    <input type="number" name="d5" placeholder="Enter weight in gm">
    <button type="submit" class="btn">ADD TO CART<i class="fa fa-shopping-cart" aria-hidden="true"></i> </button>
    
    
    </figcaption>
  </div>

  <div class="colu">
    <img src="http://localhost/IWP_Project/images/walnut.jpg" alt="Forest" style="width:100%;margin-left: 100px;">
    <figcaption style="margin-left: 250px;"><h1>Walnuts&nbsp&nbsp(&#8377 880 per kg)</h1>
    <input type="number" name="d6" placeholder="Enter weight in gmr">
    <button type="submit" class="btn">ADD TO CART<i class="fa fa-shopping-cart" aria-hidden="true"></i> </button>
    
   
    </figcaption>
  </div>
  </div>
</div>

<footer>
 <pre id="footer-text" style="margin-left: 100px;">Copyright &copy;DryfruitBasket</pre>
</footer>
</body>

</html>