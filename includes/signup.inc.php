<?php

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';

	$first =mysqli_escape_string($conn,$_POST['first']);
	$last =mysqli_escape_string($conn,$_POST['last']);
	$email =mysqli_escape_string($conn,$_POST['email']);
	$uid =mysqli_escape_string($conn,$_POST['uid']);
	$pwd =mysqli_escape_string($conn,$_POST['pwd']);

	// error handlers//
	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
echo '<script language="javascript">';
echo 'alert("please! fill the fields.")';
echo '</script>';
	} else{
		//check for valid inputs
		if (!preg_match("/^[a-zA-Z]*$/",$first) || !preg_match("/^[a-zA-Z]*$/",$last)) {
echo '<script language="javascript">';
echo 'alert("Your name doesnt match standards.")';
echo '</script>';

		}
		else{
			//check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo '<script language="javascript">';
echo 'alert("please! Enter the valid email.")';
echo '</script>';
			} else{
				$sql = "SELECT * from users where user_uid='$uid'";
				$result = mysqli_query($conn,$sql);
				$resultcheck = mysqli_num_rows($result);

				if ($resultcheck > 0) {
echo '<script language="javascript">';
echo 'alert("username already taken.")';
echo '</script>';
				} else{
					//hashing the pwd
					$hashedpwd = password_hash($pwd,PASSWORD_DEFAULT);
					//insert the user into database
					$sql = "INSERT INTO users(user_first,user_last,user_email,user_uid,user_pwd) VALUES ('$first','$last','$email','$uid','$hashedpwd');";
					mysqli_query($conn,$sql);
					header("location: ../signup.php?signup=success");
					exit();
				}
			}
		}
	}
} else{
	header("location: ../signup.php");
	exit();
	
}