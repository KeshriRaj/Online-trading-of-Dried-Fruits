<?php
if($_POST['d1']!="")
  {
  	$_price=$_POST['d1'];
  	$_fruits="Cashew";
  	$_pricef=(($_price)/1000)*840;
  	$_gst=0.05*$_pricef;
  	$total=$_pricef+$_gst;
  	echo"$total";
  }
?>