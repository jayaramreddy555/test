<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title> chat window</title>
		<link rel="stylesheet" type="text/css" href="window.css">
	</head>
	<body>
		<div id="status">
	<h1 style="background-color: #6495ed;color: white;"><?php echo $_SESSION['uname']?>-online</h1>
	
	<div class="message">
	
    <?php
	$sql = "SELECT * FROM messages";
	$result = $conn->query($sql);
	if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
	echo "" . $row["uname"]. "" . "::". $row["msg"]." --" .$row["date"]. "<br>";
						echo"<br>";
	}
    } else { 
    	     echo"0 results";
		   }
	$conn->close();
	?>
			
			</div>
		<form method="post"	action="send.php">
			<textarea name="msg" placeholder="typing..." class="form-control"></textarea><br>
			<input type="submit" value="send">
		</form><br>
		<form action="logout.php">
			<input style="width:100%;background-color: #6495ed;color:white;font-size:20px;" type="submit" value="Logout">
		</form>

		</div>
	</body>
</html>