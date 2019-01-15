<form id="quiz" action="quiz.php" method="POST">
	<h1>Vul deze quiz naar de waarheid in.</h1>
	<p>
		<label for="boodschappenlijst">Maak jij een boodschappenlijstje?</label>
		<input id="boodschappenlijst" type="radio" name="boodschappenlijst" value=1 required />Ja <br />
		<input id="boodschappenlijst" type="radio" name="boodschappenlijst" value=2 required />Nee
	</p>

	<p>
		<label for="boodschappen2">Wat is belangrijk voor het maken van een boodschappenlijstje?</label>
		<input id="boodschappen2" type="radio" name="boodschappen2" value=1 required />A. Controleer de voorraad voordat je een boodschappenlijstje maak. <br />
		<input id="boodschappen2" type="radio" name="boodschappen2" value=2 required />B. Koop 1x per week boodschappen <br />
		<input id="boodschappen2" type="radio" name="boodschappen2" value=3 required />C. Maak een planning voor het eten voor de komende week. <br />
		<input id="boodschappen2" type="radio" name="boodschappen2" value=4 required />A & B zijn juist. <br />
		<input id="boodschappen2" type="radio" name="boodschappen2" value=5 required />A & C zijn juist. <br />
		<input id="boodschappen2" type="radio" name="boodschappen2" value=6 required />B & C zijn juist.<br />
		<input id="boodschappen2" type="radio" name="boodschappen2" value=7 required />A, B & C zijn juist.
	</p>

	<p>
		<label for="boodschappen3">Hoe vervoer jij je diepvriesproducten?</label>
		<input id="boodschappen3" type="radio" name="boodschappen3" value=1 required />In een tas. <br />
		<input id="boodschappen3" type="radio" name="boodschappen3" value=2 required />In een tas en ik berg het zo snel mogelijk op. <br />
		<input id="boodschappen3" type="radio" name="boodschappen3" value=3 required />In een koeltas. <br />
		<input id="boodschappen3" type="radio" name="boodschappen3" value=4 required />In een koeltas en ik berg het zo snel mogelijk op.
	</p>

	<p>
		<input class="button roundborder" type="submit" value="Submit" />
	</p>
</form>