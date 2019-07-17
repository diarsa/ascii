<?php
	$karakter = "117 112 116 116 105 107 064 117 110 100 105 107 115 104 097 046 097 099 046 105 100";
	$pisahkan = explode(" ", $karakter);
	foreach ($pisahkan as $key) {
		echo chr($key);
	}
?>
