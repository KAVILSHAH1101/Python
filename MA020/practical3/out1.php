<?php
	$browser = array("Chrome" ,"Interner explorer","Mozila Firezox" );
	echo "<select>";
	foreach ($browser as $b) {
		echo "<option name='$b'>$b</option>";
	}
	echo "</select>"
?>