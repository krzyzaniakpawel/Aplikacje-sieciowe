<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator kredytowy</title>
</head>
<body>
	<div style="margin-bottom: 2em;">
		<a href="<?php print(_APP_ROOT);?>/app/inna_chroniona.php">Inna chroniona strona</a>
		<a href="<?php print(_APP_ROOT);?>/app/security/logout.php">Wyloguj</a>
	</div>

	<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
        <label>Kwota kredytu</label><br>
        <input type="text" name="loan"><br><br>
        
        <label>Okres kredytowania (w miesiącach)</label><br>
        <input type="text" name="months"><br><br>

        <label>Oprocentowanie</label><br>
        <input type="text" name="interest_rate"> %<br><br>
        
        <label>Rodzaj raty</label><br>
        <input type="radio" name="installment" value="decreasing" checked>
        <label>Malejąca</label><br>
        <input type="radio" name="installment" value="equal">
        <label>Równa</label><br><br>
        
        <input type="submit" value="Oblicz">
    </form>

	<?php
	if (isset($messages)) {
		if (count ( $messages ) > 0) {
			echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
			foreach ( $messages as $key => $msg ) {
				echo '<li>'.$msg.'</li>';
			}
			echo '</ol>';
		}
	} 
	
	if (isset($table)) {
		echo "<br><table>";
		foreach ($table as $row) {
			echo $row;
		}
		echo "</table>";
	}
	?>
</body>
</html>