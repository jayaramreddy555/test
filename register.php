<?php
	
	include_once 'db.php';
	$username =  mysqli_real_escape_string($conn, $_POST['username']);
	$email =  mysqli_real_escape_string($conn, $_POST['email']);
	$password =  mysqli_real_escape_string($conn, $_POST['password']);
$sql = " INSERT INTO  register (username, email, password ) VALUES ('$username', '$email','$password' )";
mysqli_query($conn, $sql);
header("Location:index.htm");
?>