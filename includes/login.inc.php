<?php

session_start();

if (isset($_POST['submit'])) {
	include 'dbh.inc.php';

	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

	//empty
	if (empty($uid) || empty($pwd)) {
	
echo '<script language="javascript">';
echo 'alert("please! fill the fields.")';
echo '</script>';
		
	} else{
		$sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email ='$uid'";
		$result = mysqli_query($conn,$sql);
		$resultcheck = mysqli_num_rows($result);

		if ($resultcheck < 1) {
echo '<script language="javascript">';
echo 'alert("please! register your self first.")';
echo '</script>';
		} else{
			if ($row = mysqli_fetch_assoc($result)) {
				//dehashing password
				$hashedpwdcheck = password_verify($pwd,$row['user_pwd']);
				if ($hashedpwdcheck == false) {
echo '<script language="javascript">';
echo 'alert("Incorrect password")';
echo '</script>';
				} elseif ($hashedpwdcheck == true) {
					//login user

					if ($row['user_role'] == 'admin') {
						
						$_SESSION['u_id'] = $row['user_id'];
						$_SESSION['u_first'] = $row['user_first'];
						$_SESSION['u_last'] = $row['user_last'];
						$_SESSION['u_email'] = $row['user_email'];
						session_start('shopping_cart');
						

						header("location: ../admin.php?login=success");
						exit();	
					}

					else{

						$_SESSION['u_id'] = $row['user_id'];
						$_SESSION['u_first'] = $row['user_first'];
						$_SESSION['u_last'] = $row['user_last'];
						$_SESSION['u_email'] = $row['user_email'];

						if ($_GET['login']=='success') {
							session_start();
	}
}
						

					header("location: ../index_login.php?login=success");
					exit();
					}
					
				}
			}
		}
	} 
 else{
		header("location: ../index.php?login=error");
		exit();
	}
