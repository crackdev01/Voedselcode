<form id="quiz" action="quiz.php" method="POST">
	<h1>Vul deze quiz naar de waarheid in.</h1>
	<p>
		<label for="koelkast">Wat is de temperatuur van je koelkast?</label>
		<input id="koelkast" type="radio" name="koelkast" value=1 required />1&#8451 <br />
		<input id="koelkast" type="radio" name="koelkast" value=2 required />2&#8451<br />
		<input id="koelkast" type="radio" name="koelkast" value=3 required />3&#8451 <br />
		<input id="koelkast" type="radio" name="koelkast" value=4 required />4&#8451 <br />
		<input id="koelkast" type="radio" name="koelkast" value=5 required />5&#8451 <br />
		<input id="koelkast" type="radio" name="koelkast" value=6 required />6&#8451 <br />
		<input id="koelkast" type="radio" name="koelkast" value=7 required />7&#8451
	</p>

	<p>
		<label for="houdbare">Waar leg je kort houdbare producten?</label>
		<input id="houdbare" type="radio" name="houdbare" value=1 required />Achteraan. <br />
		<input id="houdbare" type="radio" name="houdbare" value=2 required />Vooraan. <br />
		<input id="houdbare" type="radio" name="houdbare" value=3 required />Op een zichtbare plek. <br />
		<input id="houdbare" type="radio" name="houdbare" value=4 required />Waar plek is.
	</p>

	<p>
		<label for="vers">Versproducten koop ik...</label>
		<input id="vers" type="radio" name="vers" value=1 required />... meerdere keren per week. <br />
		<input id="vers" type="radio" name="vers" value=2 required />... 1 week vooruit. <br />
	</p>

	<p>
		<label for="datum">Producten die over datum zijn...</label>
		<input id="datum" type="radio" name="datum" value=1 required />... gooi ik gelijk weg. <br />
		<input id="datum" type="radio" name="datum" value=2 required />... controleer ik voordat ik het weggooi of het nog goed is.<br />
		<input id="datum" type="radio" name="datum" value=3 required />... gooi ik weg als het versproducten zijn, en anders controleer ik of het nog goed is voordat ik het weggooi.
	</p>

	<p>
		<input class="button roundborder" type="submit" value="Submit" />
	</p>
</form>