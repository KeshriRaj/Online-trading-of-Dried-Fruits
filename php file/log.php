<?php
include 'function.php';
include 'database.php';
if(isset($_POST["submitf"]))
{
	$u=$_POST["usernamef"];
	$p=$_POST["passwordf"];

	if(empty($_POST["usernamef"]))
		echo "UserName is required";
	else
		$usernamef=test_input($_POST["usernamef"]);
	if(empty($_POST["passwordf"]))
		echo "Password is required";
	else
		$passwordf=test_input($_POST["passwordf"]);
	/**if(empty($_POST["secretf"]))
		echo "First Name is required";
	else
		$secretf=test_input($_POST["secretf"]);
	if(empty($_POST["otpf"]))
		echo "First Name is required";
	else
		$otpf=test_input($_POST["otpf"]);**/
	$sql="SELECT * FROM register WHERE username= '$u' and password = '$p'";

	$res= $conn->query($sql);
	if($res->num_rows >0)
	{
		$_SESSION["submitf"]=true;
		echo "<script> alert('Correct Credentials');
		window.location.href='http://localhost/IWP_Project/php%20file/hom1.php';
		</script>";
	}
	else
	{
		echo "<script> alert('InCorrect Credentials');
		window.location.href='http://localhost/IWP_Project/php%20file/log.html';
		</script>";
	}
}
function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
