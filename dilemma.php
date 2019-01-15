<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Dilemma Voedselverspilling</title>
	<meta name="keywords" content="voedselverspilling" />
	<meta name="description" content="Dilemma van voedselverspilling" />
	<link href="https://fonts.googleapis.com/css?family=Sarabun:200,300,400,600,700,900" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/probleem1.js"></script>
</head>

<body>
	<?php
		require_once 'php/nav.php';
		require_once 'php/reset_quiz.php';
	?>

	<div class="container">
        <div id="probleemContent">
			<h1><span id="special">Het <span id="highlight2">Dilemma</span></span></h1><br>
				<h2>Hoeveel verdwijnt in de afvalbak?</h2>
                    <p>Zo'n 13 procent van ons eten verdwijnt jaarlijks ongebruikt in de afvalbak, dat is ruim 40 kilo voedsel per persoon per jaar. Alle huishoudens samen verspillen we daarmee in Nederland 700 miljoen kilo goed voedsel. Dat zijn duizenden vuilniswagens vol! 
                    </p>
                    <img class="roundBorder" src="images/1.jpg" alt="prullenbak" width= "100%">
            <br>
            <br>
                <h2>Verspilling Bij Jou Thuis</h2>
                    <p>Zijn de voedingsmiddelen eenmaal in huis, dan gaat de verspilling door. Van alle bruikbare voeding (inclusief zuivel en olie) belandt jaarlijks ruim 40 kilo bij het afval. Dat kost elke Nederlander ruim 140 euro per jaar!
                    <br>
                    Verder schatten onderzoekers in dat via de gootsteen en het toilet jaarlijks per persoon 57 liter vloeistof zoals koffie, thee en frisdrank verloren gaat. 
                    </p>
                    <img class="roundBorder" src="images/2.jpg" alt="prullenbak" width= "100%">
            <br>
            <br>       
                <h2>Verschillende Oorzaken</h2>
                    <p>De oorzaken van de verspilling zijn erg verschillend: te veel ingekocht, te lang bewaard, te veel gekookt of gewoon niet lekker. </p>
            <br>
            <br>
                <div id="probleemContent1">
                <h2>Welk Voedsel Verspillen We Het Meest?</h2>
                    <h3>top-10 voedselverspilling in Nederland</h3>
                    <p>Weergegeven in kilo's per persoon per jaar
                    <span id="colon">:</span><span id="showImg">
                    <img src="images/3.jpg" alt="cirkeldiagram" width="100%"></span></p>
                    <button onclick="myFunction()" id="myButton">Klik Voor Cirkeldiagram</button>
                </div>
            
        </div>
        <div id="asideContainer">
            <aside class="asideProbleem">
                <h2>Afval</h2>
                <p>Verder vergroot het weggooien van eten de afvalberg. De milieugevolgen zijn afhankelijk van de manier waarop afval verwerkt wordt. Een deel van het huishoudelijk voedselafval van Nederland gaat bij het groente- fruit- en tuinafval; het wordt compost voor landbouw en plantsoenen.<br>

                Maar niet iedereen scheidt zijn afval; daardoor komt een deel van het weggegooide eten terecht bij het huishoudelijk restafval dat wordt verbrand in afval-energiecentrales. Daar levert het nog wat energie op. Vroeger werd het huishoudelijk afval ook gestort, maar dit is inmiddels verboden.</p>
        </aside>
        <br>
        <br>
            <aside class="asideProbleem">
                <h2>10 Tips Tegen  Voedselverspilling</h2>
                    <iframe src="https://www.youtube.com/embed/SRf9lAc75Fc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </aside>
        <br>
        <br>
            <aside class="asideProbleem">
                <h2>Milieubelasting Van Verspilling</h2>
                <p>Als voedingsmiddelen die nog prima te eten zijn, in de vuilnisbak belanden, dan gaan ook alle energie en grondstoffen verloren die nodig waren om die etenswaren te telen, vervoeren, koelen en eventueel te bewerken en verpakken. De energie die daarvoor nodig is, komt vooral van fossiele brandstoffen die klimaatverandering veroorzaken. </p><br>
            </aside>
        <br>
        <br>
            <aside class="asideProbleem">
                <h2>Uitstoot Van Broeikasgassen</h2>
                <p>Voedselverspilling in huishoudens en restaurants samen is verantwoordelijk voor ongeveer 3,5 procent van de totale jaarlijkse uitstoot van broeikasgassen van de gemiddelde consument.</p>
            </aside>
        </div>
	</div>


	<?php
		require_once 'php/footer.php';
	?>
</body>


</html>