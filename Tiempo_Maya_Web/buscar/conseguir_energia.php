<?php
	$for = mktime(0, 0, 0, 6, 3, 1900)/(24*60*60);
	$fech = date("U", strtotime($_POST['date']))/(24*60*60);
	$idd = $fech-$for;
	$nn = $idd % 13;
	if($nn >= 0) {
		$nivel = $nn + 1;
	} else {
		$nivel = $nn + 13;
	}
?>
