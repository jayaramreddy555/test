<?php

session_start();
include db.php;

$msg=mysqli_real_escape_string($conn, $_POST['msg']);
$uname=mysqli_real_escape_string($conn, $_POST['uname']);

$sql="insert into messages(msg,uname) values('$msg','$uname')";
mysqli_query($conn, $sql);
header("Location:window.php");
?>