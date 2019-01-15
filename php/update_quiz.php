<?php
	$maxpages = 4;

	switch ($_SESSION["quiz"]) {
		case 1: //Boodschappen
			if ($_POST["boodschappenlijst"] == 1) {
				$_SESSION["score"]+=10;
			}
			switch ($_POST["boodschappen2"]){
				case 1:
					$_SESSION["score"]+=5;
					break;
				case 3:
					$_SESSION["score"]+=5;
					break;
				case 5:
					$_SESSION["score"]+=10;
					break;
				case 7:
					$_SESSION["score"]+=5;
					break;
				default:
					break;
			}
			switch ($_POST["boodschappen3"]){
				case 3:
					$_SESSION["score"]+=5;
					break;
				case 4:
					$_SESSION["score"]+=10;
					break;
				default:
					break;
			}
			break;
		case 2: //Bewaren 
			if ($_POST["koelkast"] == 4) {
				$_SESSION["score"]+=10;
			} else if ($_POST["koelkast"] == 3) {
				$_SESSION["score"]+=5;
			}
			if ($_POST["houdbare"] == 2) {
				$_SESSION["score"]+=10;
			}
			if ($_POST["vers"] == 1) {
				$_SESSION["score"]+=10;
			}
			switch ($_POST["datum"]){
				case 2:
					$_SESSION["score"]+=5;
					break;
				case 3:
					$_SESSION["score"]+=10;
					break;
				default:
					break;
			}
			break;
		case 3: //Koken
			if ($_POST["gasten"] == 2) {
				$_SESSION["score"]+=10;
			}
			switch ($_POST["restjes"]){
				case 3:
					$_SESSION["score"]+=5;
					break;
				case 6:
					$_SESSION["score"]+=5;
					break;
				case 5:
					$_SESSION["score"]+=10;
					break;
				default:
					break;
			}
			break;
		default:
			break;
	}

	if ($_SESSION["quiz"]>$maxpages) {
		$_SESSION["quiz"]=1;
		$_SESSION["score"]=10;
	} else {
		$_SESSION["quiz"]++;
	}
?>