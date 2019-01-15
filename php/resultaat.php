<?php
	$score = $_SESSION["score"];


	if ($score <= 50) {
		$class="result-bad";
		$message="Helaas. We adviseren om de tips te gaan gebruiken!";
	} else if ($score == 100)
	{
		$class="result-good";
		$message="Je bent al zeer goed bezig. Ga zo door!";
	} else if ($score >= 75) {
		$class="result-good";
		$message="Je bent goed bezig. Bekijk de site voor handige tips!";
	} else {
		$class="result-average";
		$message="Het begin is er. Gebruik de tips om nog bewuster met voedsel om te gaan!";
	}
	
	echo "<div class='".$class."'><span></span>".$score."</div>";
	echo "<div class='result'>".$message."</div>";

?>