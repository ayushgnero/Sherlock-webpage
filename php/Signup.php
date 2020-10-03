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
			header("Location: ..//register.html?error=passwordnotmatch&=".$username);
			exit();
		}
		else
		{
			$host = "localhost";
			$dbuser = "root";
			$dbpass = "";
			$dbname = "max";

			$conn = new mysqli($host,$dbuser, $dbpass, $dbname);

			if(mysqli_connect_error())
			{
				die('Connect Error('.mysqli_connect_errno().')'
				.mysqli_connect_error());
			}
			else
			{
				$user = mysqli_query($conn,"SELECT username FROM iwp WHERE username='$username'");
				$results = mysqli_num_rows($user);
				if ($results>0)
				{
					header("Location: ../register.html?error=usernamealreadyexists");
					exit();
				}
				else {
					$hashcode = password_hash($password, PASSWORD_DEFAULT);
					$sql = "INSERT INTO iwp (username, password) values ('$username','$hashcode')";
					if($conn->query($sql))
					{
						define('signup',TRUE);
						require('../examples/three-prwm-loader.php');
						header("Location: ../home.php");
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
	}
	else
  {
    header("Location: ../register.html");
    exit();
  }
?>
