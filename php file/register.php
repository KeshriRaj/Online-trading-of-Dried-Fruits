<?php
include "database.php";
if(isset($_POST["submit"]))
{

	if(empty($_POST["fname"]))
		echo "First Name is required";
	else
	{
		$fname=test_input($_POST["fname"]);
	}

	if(empty($_POST["lname"]))
		echo "Last Name is required";
	else
		$lname=test_input($_POST["lname"]);

	if(empty($_POST["username"]))
		echo "User Name is required";
	else
		$username=test_input($_POST["username"]);

	if(empty($_POST["password"]))
		echo "Password is required";
	else
		$password=test_input($_POST["password"]);

	if(empty($_POST["cpassword"]))
		echo "Confirm Password is required";
	else
		$confirmpassword=test_input($_POST["cpassword"]);

	if(empty($_POST["email"]))
		echo "Email is required";
	else
		$email=test_input($_POST["email"]);

	if(empty($_POST["confirmemail"]))
		echo "Confirmemail is required";
	else
		$confirmemail=test_input($_POST["confirmemail"]);

	if(empty($_POST["number"]))
		echo "Number is required";
	else
		$number=test_input($_POST["number"]);
	if(empty($_POST["address"]))
		echo "Address is required";
	else
		$address=test_input($_POST["address"]);

	if(empty($_POST["pincode"]) and var_dump($_POST["pincode"])== "string(6)")
		echo "Pincode is required and it should be of 6 digits";
	else
		$pincode=test_input($_POST["pincode"]);
}
 	$sql = "INSERT INTO register (first_name,last_name,username,password,confirm_password,email,confirm_email,phone_no,address,pincode) VALUES('$fname','$lname','$username','$password','$confirmpassword','$email','$confirmemail','$number','$address','$pincode')";
 	echo "<script> alert('Registered');
    window.location.href='http://localhost/IWP_Project/html%20file/hom1.php';
    </script>";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
