<?php
	$formato = mktime(0, 0, 0, 6, 3, 1900)/(24*60*60);
	$fecha = date("U", strtotime($_POST['date']))/(24*60*60);
	$id = $fecha-$formato;
	$nahual = $id % 20;
	if($nahual >= 0) {
		$query = $nahual + 1;
	} else {
		$query = $nahual + 20;
	}
?>
