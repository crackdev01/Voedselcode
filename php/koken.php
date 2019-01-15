<form id="quiz" action="quiz.php" method="POST">
	<h1>Vul deze quiz naar de waarheid in.</h1>
	<p>
		<label for="gasten">Als er gasten komen...</label>
		<input id="gasten" type="radio" name="gasten" value=1 required />... heb ik bijna altijd te weinig.<br />
		<input id="gasten" type="radio" name="gasten" value=2 required />... maak ik wat extra van etenswaar dat goed te bewaren is zoals rijst.<br />
		<input id="gasten" type="radio" name="gasten" value=3 required />... maak ik ruim te veel.
	</p>

	<p>
		<label for="restjes">Wat doe jij met restjes van het avondeten?</label>
		<input id="restjes" type="radio" name="restjes" value=1 required />Gooi ik weg <br />
		<input id="restjes" type="radio" name="restjes" value=2 required />Bewaar ik 1 dag in de koelkast voordat ik het weggooi.<br />
		<input id="restjes" type="radio" name="restjes" value=3 required />Bewaar ik 1 dag goed afgedekt in de koelkast voordat ik het weggooi.<br />
		<input id="restjes" type="radio" name="restjes" value=4 required />Bewaar ik 2 dagen in de koelkast voordat ik het weggooi. <br />
		<input id="restjes" type="radio" name="restjes" value=5 required />Bewaar ik 2 dagen goed afgedekt in de koelkast voordat ik het weggooi.<br />
		<input id="restjes" type="radio" name="restjes" value=6 required />Geef ik aan de hond.
	</p>

	<p>
		<input class="button roundborder" type="submit" value="Submit" />
	</p>
</form>