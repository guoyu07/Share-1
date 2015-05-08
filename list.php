<?php
	echo "<link rel='stylesheet' href='css/bootstrap.css' />";
	echo "<link rel='stylesheet' href='css/style.css' />";
	$dir = 'files/';
	$files = glob($dir . '*.*');
	echo "<br /><br /><center><div class='container'><div class='well well-sm'>";
	echo "<h3>File list</h3>";
	foreach($files as $file)
	{
		echo "<a href='" . $file . "'>" . $file . "</a><br />";
	}
	echo "</div></div></center>";
?>