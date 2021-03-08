<?php
	$formato = mktime(0, 0, 0, 6, 2, 1900)/(24*60*60);
	$fe = date("U", strtotime($fecha))/(24*60*60);
	$id = $fe-$formato;
	$nahual = $id % 20;
	if($nahual >= 0) {
		$query = $nahual + 1;
	} else {
		$query = $nahual + 20;
	}
?>
