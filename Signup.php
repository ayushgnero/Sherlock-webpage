<?php
	if (isset($_POST['Signup']))
	{
		$username = filter_input(INPUT_POST, 'username');
		$password = filter_input(INPUT_POST, 'password');
		$repassword = filter_input(INPUT_POST, 'repassword');
		if (Empty($username) or Empty($password ))
		{
			echo "Username or Password can not be empty";
			die();
		}
		elseif ($password !== $repassword)
		{
			header("Location: ..//Project/Sherlock-webpage/register.html?error=invalidusername&=".$username);
			exit();
		}
		else
		{
			$host = "localhost";
			$dbuser = "root";
			$dbpass = "";
			$dbname = "iwp";

			$conn = new mysqli($host,$dbuser, $dbpass, $dbname);

			if(mysqli_connect_error())
			{
				die('Connect Error('.mysqli_connect_errno().')'
				.mysqli_connect_error());
			}
			else
			{
				$hashcode = password_hash($password, PASSWORD_BCRYPT);
				$sql = "INSERT INTO iwp (username, password) values ('$username','$hashcode')";
				if($conn->query($sql))
				{
					define('signup',TRUE);
					require('header.php');
					header("header.php");
					exit();
				}
				else
				{
					echo "Error: ". $sql ."
					". $conn->error;
				}
				$conn->close();
			}
		}
	}
	else
  {
    header("Location: ../Project/Sherlock-webpage/register.html");
    exit();
  }

?>
