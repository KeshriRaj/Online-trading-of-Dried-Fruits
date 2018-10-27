
<?php
include 'function.php';
include 'database.php';
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
<!--Nav Bar-->

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

/*table*/
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<title>fit-bit</title>

<link rel="stylesheet" type="text/css" href="http://localhost/IWP_Project/cssfile/main1.css">

</head>

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
<br>
<br>
<fieldset>
<h1 style="text-align: center;">Bill Reciept:-</h1>
<table style="height: 40%">
<tr>
    <th>Item                       </th>
    <th>Weight                     </th> 
    <th>Price                      </th>
    <th style="width: 200px;">Remove from Cart</th>
  </tr>
  <?php
  $_total=0;
  $sql="SELECT * FROM addnewcart";
  $result=$conn-> query($sql);
  if($result->num_rows>0)
  {
  	$i=1;
  	while($row= $result->fetch_assoc())
  	{
  		?>
  		<?php 

  		$_total=$_total+$row['pricef'];
  		?>

  <tr>
    <td><?php echo $row['fruit'] ?></td>
    <td><?php echo $row['price'] ?></td>
    <td><span>&#8377</span><?php echo $row['pricef'] ?></td>
    <td><input type="submit" name="del" value="Remove"></td>
  </tr>
  <?php }
	$_gst=0.05*$_total;
	$_total=$_total+$_gst;
	$_SESSION["amt"] = $_total;
	}
  ?>
  <tr>
  	<td><?php echo"GST" ?></td>
    <td><?php echo"--" ?></td>
    <td><span>&#8377</span><?php echo"$_gst" ?></td>
   </tr>
   <tr>
   <td>                </td>
   <td><b>Total</b></td>
   <td><span>&#8377</span><?php echo"$_total"; ?></td>

</table>
<br>
<form action="payment.php" name="pyment">

<!--<input type="hidden" name="amount" value=<?php //echo $_total ?> > -->
<input type="submit" name="Pay" value="Pay" style="margin-left: 776px;

    width: 112px;
    height: 45px;
    border-radius: 10px;
    color: blue;
    font-size: 25px;
    "
    >
    </form>
</fieldset>
<footer>
 <pre id="footer-text" style="margin-left: 100px;">Copyright &copy;DryfruitBasket</pre>
</footer>
</body>

</html>