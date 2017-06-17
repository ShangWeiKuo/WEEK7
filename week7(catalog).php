<?php 
	
	session_start();

	if (isset($_POST['item'])) 
	{
		$_SESSION['quantity'] = $_POST['quantity'];
		$id = $_POST['item'];
		$_SESSION['ID'] = $id;

		switch ($_SESSION['ID']) 
		{
			case "S001":
				$_SESSION['name'] = "10 吋變形平板";
				$_SESSION['price'] = 12000;
				break;
			
			case "S002":
				$_SESSION['name'] = "15.6 吋筆記型電腦";
				$_SESSION['price'] = 27000;
				break;

			case "S003":
				$_SESSION['name'] = "iPhone手機";
				$_SESSION['price'] = 21000;
				break;
		}

		header("Location: homework3(savecart).php");
	}
?>