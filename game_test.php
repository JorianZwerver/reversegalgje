<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>test input</title>
</head>

<body>
	<?php
		// hier komt vraag functie te staan
		echo "<h1>ben je gay?</h1>";

		$beurten = 10;
		if(isset($_POST['antwoord'])) {
			echo $_POST['antwoord'];
			$beurten--;
		}
		
		if(isset($_POST['zetTerug'])) {
			echo $_POST['zetTerug'];
		}
		echo "<br>".$beurten;
	?>

	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		<input type="submit" name="antwoord" value="ja"></input>
		<input type="submit" name="antwoord" value="nee"></input>
		<input type="submit" name="zetTerug" value="ga een zet terug"></input>
	</form>
</body>
</html>