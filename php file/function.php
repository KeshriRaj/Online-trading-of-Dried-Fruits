<?php
session_start();
function session_check()
{
	if (isset($_SESSION['submitf'])) 
	{
		if ($_SESSION['submitf']== true) 
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
}
?>


