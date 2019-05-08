<?php
session_start();
include_once 'db.php';

$uname =  mysqli_real_escape_string($conn, $_POST['uname']);
$pass =  mysqli_real_escape_string($conn, $_POST['pass']);

$sql = " SELECT * FROM  register WHERE username='$uname' AND password='$pass'";
$result=$conn->query($sql);

if (!$row=$result->fetch_assoc()){
	header("Location:error.php");
} else {
      
      $_SESSION['uname']=$_POST['uname'];

header("Location:window.php");
}
?>