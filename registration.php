<?php
session_start();
//header("location:signinup.php");
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'quiz');
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = "select * from adminreg where username = '$username'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
 
 if($num == 1){
	 echo" username already taken";
 }else{
	 $reg = "insert into adminreg(username, email, password) values('$username' , '$email' , '$password')";
	 mysqli_query($con, $reg);
	 header("location:dash.php");
	// echo" Registration successful";
	 
 }
 $_SESSION["key"]      = '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39';
		// Set the new session user-name
		$_SESSION["name"]     = 'Admin';
		$_SESSION['username'] = $username;
		header("location:dash.php");
?>