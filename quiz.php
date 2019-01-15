<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Voorkom Voedselverspilling</title>
	<meta name="keywords" content="voedselverspilling" />
	<meta name="description" content="Hoe voedselverspilling te voorkomen" />
	<link href="https://fonts.googleapis.com/css?family=Sarabun:200,300,400,600,700,900" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/jquery-3.3.1.min.js"></script>
</head>

<body>
	<?php
		require_once 'php/nav.php';
		require_once 'php/session.php';

		if($_POST){
        	require_once 'php/update_quiz.php';
    	}

	?>

	<div class='container'>

		<div class='maincontent'>
			<?php 
				switch ($_SESSION["quiz"]){
					case 1:
						require_once 'php/boodschappen.php';
						break;
					case 2:
						require_once 'php/bewaren.php';
						break;
					case 3:
						require_once 'php/koken.php';
						break;
					case 4:
						require_once 'php/resultaat.php';
						break;
					default: 
						echo "Quiz could not be loaded!";
						//unset ($_SESSION["quiz"], $_SESSION["score"]);
						break;
				}
			?>

		</div>


		<div class='sidebar'>

			<div class='article shadow'>
			<p>
				<a href='php/resetquiz.php'>Reset quiz</a>
			</p>
			</div>

		</div>

	</div>


	<?php
		require_once 'php/footer.php';
	?>
</body>


</html>