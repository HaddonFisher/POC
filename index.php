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
		
		$country = 'united-states';
		$jsonURL = "http://www.medalbot.com/api/v1/medals/";

		$fulljsonURL = $jsonURL . $country;
		$json = file_get_contents($fulljsonURL);
		$medal_array = json_decode($json);
		?>

		<?php print_r($medal_array); ?>
		<?php echo "You requested a Rio medal count for:" . $medal_array['country_name'];?>
		<?php echo "Bronze:" . $medal_array['bronze_count'];?>
		<?php echo "Silver:" . $medal_array['silver_count'];?>
		<?php echo "Gold:" . $medal_array['gold_count'];?>

		?>
		</br></br>
		<em>Brought to you by Haddon Industries</em>
	 </body>

<!-- 
* Release Notes
* 1.0 - Let there be light
-->

</html>