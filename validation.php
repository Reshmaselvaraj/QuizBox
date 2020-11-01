<?php
	//header('location:signinup.php');
	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con, 'quiz');
	$username = $_POST['username'];
	//$Email = $_POST['Email'];
	$password = $_POST['password'];

	$s = "select * from adminreg where username = '$username' && password = '$password'";
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);

	if ($num == 1) {
		// Init the session
		session_start();
		// Reset if there is old cookie-session
		if (isset($_SESSION['username'])) {
			session_unset();
		}
		// Session always needs a secret-key
		$_SESSION["key"]      = '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39';
		// Set the new session user-name
		$_SESSION["name"]     = 'Admin';
		$_SESSION['username'] = $username;
		header("location:dash.php");
	}
?>
