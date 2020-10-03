<?php
	if (isset($_POST['Signin']))
	{
		$username = filter_input(INPUT_POST, 'username');
		$password = filter_input(INPUT_POST, 'password');
		if (empty($username) or empty($password ))
		{
			echo "Username or Password can not be empty";
			header("Location: ../Main.html?error=emptyfields");
			die();
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
					$sql = "SELECT * FROM iwp WHERE username=?;";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql))
          {
            header("Location: ../Main.html?error=sqlerror");
            exit();
          }
          else
          {
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result))
            {
              $pwdcheck = password_verify($password,$row['password']);
              if ($pwdcheck == false)
              {
                header("Location: ../Main.html?error=wrongpassword");
                exit();
              }
              else if ($pwdcheck == true)
              {
                define('signup',TRUE);
    						require('../examples/three-prwm-loader.php');
    						header("Location: ../examples/three-prwm-loader.php");
    						exit();
              }
              else {
                header("Location: ../Main.html?error=sqlerror");
                exit();
              }
            }
            else
            {
              header("Location: ../Main.html?error=nouser");
              exit();
            }
          }
			}
		}
	}
	else
  {
    header("Location: ../Main.html");
    exit();
  }

?>
