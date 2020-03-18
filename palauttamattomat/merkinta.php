<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="merkinta.css">
	</head>
	<body>
		<form action="yhteys.php" method="POST">
		<div class="paivakirja">Päiväkirja</div><br>
			<table>
				<text class="otsikko">Peliharjoitukset/kesto</text><input class="input" type ="number" name="training" required><br><br>
				<text class="otsikko">Unimäärä</text><input class="input" type ="number" name="sleep" required><br><br>
				<text class="otsikko">Ruokailu(aika ja sisältö)</text><input class="input" type="text" name="eating" required><br><br>
				<text class="otsikko">Liikunta(laji, määrä)</text><input class="input" type="text" name="liikunta" required><br><br>
				<text class="otsikko">Päivän mieliala</text><input class="input" type="text" name="mieliala" required><br><br>
				<text class="otsikko">Muuta omin sanoin</text><br><br>
				<textarea rows ="5" cols="20" type="text" name="muuta"></textarea><br>
				<button type="submit" name="submit">Lähetä</button>
			</table>
		</form>
	<body>
</html>