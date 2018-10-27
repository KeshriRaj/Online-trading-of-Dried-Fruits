<?php
include 'database.php';
  if($_POST['d1']!="")
  {
  	$_price=$_POST['d1'];
  	$_fruits="Cashew";
  	$_pricef=(($_price)/1000)*840;
  	$sql="INSERT INTO addnewcart (fruit, price, pricef) VALUES ('$_fruits','$_price','$_pricef')";
  	if($conn->query($sql)===TRUE)
  	{
  		echo"<script>alert('Entered to Cart')
  		window.location.href='http://localhost/IWP_Project/php%20file/hom1.php';</script>";

  	}
  	else
  		echo"error";
  }
  else if($_POST['d2']!="")
  {
  	
  	$_price=$_POST['d2'];
  	$_fruits="Almonds";
  	$_pricef=(($_price)/1000)*740;
  	$sql="INSERT INTO addnewcart (fruit, price, pricef) VALUES ('$_fruits','$_price','$_pricef')";
    if($conn->query($sql)===TRUE)
    {
      echo"<script>alert('Entered to Cart')
      window.location.href='http://localhost/IWP_Project/php%20file/hom1.php';</script>";

    }
    else
      echo"error";
  }
  else if($_POST['d3']!="")
  {
  	
  	$_price=$_POST['d3'];
  	$_fruits="Pistachios";
  	$_pricef=(($_price)/1000)*1040;
  	$sql="INSERT INTO addnewcart (fruit, price, pricef) VALUES ('$_fruits','$_price','$_pricef')";
    if($conn->query($sql)===TRUE)
    {
      echo"<script>alert('Entered to Cart')
      window.location.href='http://localhost/IWP_Project/php%20file/hom1.php';</script>";

    }
    else
      echo"error";
  }
  
  else if($_POST['d4']!="")
  {
  	
  	$_price=$_POST['d4'];
  	$_fruits="Raisins";
  	$_pricef=(($_price)/1000)*280;
    $sql="INSERT INTO addnewcart (fruit, price, pricef) VALUES ('$_fruits','$_price','$_pricef')";
    if($conn->query($sql)===TRUE)
    {
      echo"<script>alert('Entered to Cart')
      window.location.href='http://localhost/IWP_Project/php%20file/hom1.php';</script>";

    }
    else
      echo"error";
  }
  else if($_POST['d5']!="")
  {
  	
  	$_price=$_POST['d5'];
  	$_fruits="Dates";
  	$_pricef=(($_price)/1000)*160;
    $sql="INSERT INTO addnewcart (fruit, price, pricef) VALUES ('$_fruits','$_price','$_pricef')";
    if($conn->query($sql)===TRUE)
    {
      echo"<script>alert('Entered to Cart')
      window.location.href='http://localhost/IWP_Project/php%20file/hom1.php';</script>";

    }
    else
      echo"error";
  }
  else if($_POST['d6']!="")
  {
  	
  	$_price=$_POST['d6'];
  	$_fruits="Walnuts";
  	$_pricef=(($_price)/1000)*880;
  	$sql="INSERT INTO addnewcart (fruit, price, pricef) VALUES ('$_fruits','$_price','$_pricef')";
    if($conn->query($sql)===TRUE)
    {
      echo"<script>alert('Entered to Cart')
      window.location.href='http://localhost/IWP_Project/php%20file/hom1.php';</script>";

    }
    else
      echo"error";
  }
  
  else
  {
  	echo "<script> alert('Please enter valid amount!');
    window.location.href='http://localhost/IWP_Project/php%20file/hom1.php';</script>";
  }
?>