<html >
  <head>
    
    <title>QuizBox</title>
	<link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

  </head>

<?php
session_start();
if (isset($_SESSION['username'])) {
    session_destroy();
}
$ref = @$_GET['q'];
header("location:thankyou.html");
?>

</html>