<?php
session_start();
include "logincon.php";

if (isset($_POST['username']) && isset($_POST['password'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$uname = validate($_POST['username']);
	$pass = validate($_POST['password']);


	if (empty($uname)) {
		header("Location: login.php?error=User NAme is requiered");
		exit();
	}else if(empty($pass)) {
		header("Location: login.php?error=Password is requiered");
		exit();
	}else{
		$sql = "SELECT * FROM login WHERE user = '$uname' AND pass = '$pass' ";

		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)>0)
		{
		while($row = mysqli_fetch_assoc($result))
		{
			if($row["role"] == "president")
			{
				$_SESSION['user'] = $row['user'];
				$_SESSION['id'] = $row['id'];
				header('Location: president.php');
			}
			else if($row["role"] == "cashier")
			{
				$_SESSION['user'] = $row['user'];
				$_SESSION['id'] = $row['id'];
				header('Location: cashier.php');
			}
			else if($row["role"] == "secratary")
			{
				$_SESSION['user'] = $row['user'];
				$_SESSION['id'] = $row['id'];
				header('Location: secratary.php');
			}
			else{
				$_SESSION['user'] = $row['user'];
				$_SESSION['id'] = $row['id'];
				header('Location: index.php');
			}
			
		}
	}
	}

	}


else{
	
	header("Location: login.php");
	exit();

}
?>

