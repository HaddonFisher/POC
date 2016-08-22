<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Proof of Concept</title>
	</head>
	<body>
		<h1>Welcome to Project: Baby Steps (MK1.1)</h1></br>
		<?php echo "Hey World!";?><br>
		<?php echo "Check out this thing I sent you!";?><br><br>
		<?php
		
		$mysql_username = "empty";
		$mysql_password = "empty";

		$mysql_username = $_ENV["VCAP_SERVICES"][0][0][3];
		$mysql_password = $_ENV["VCAP_SERVICES"][0][0][4];
		
		echo "My username is:" . $mysql_username . "<br>";
		echo "My password is:" . $mysql_password . "<br>";

		print($_ENV["VCAP_SERVICES"]);

		?>
		</br></br>
		<em>Brought to you by Haddon Industries</em>
	 </body>

<!-- 
* Release Notes
* 1.0 - Let there be light
-->

</html>