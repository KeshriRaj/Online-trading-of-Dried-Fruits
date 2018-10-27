<? php
if(isset($_POST["submit"]))
{

	if(empty($_POST["name"]))
		echo "Name is required";
	else
		$fname=test_input($_POST["name"]);

	if(empty($_POST["email1"]))
		echo "Email is required";
	else
		$email=test_input($_POST["email1"]);

	if(empty($_POST["Phone"]))
		echo "Phone number is required";
	else
		$Phone=test_input($_POST["Phone"]);

	if(empty($_POST["comment"]))
		echo "Comment is required";
	else
		$comment=test_input($_POST["comment"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>







