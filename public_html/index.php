<?php
	namespace Pug;
	require_once(__DIR__ . "/../resources/library/vendor/autoload.php");
	$pug = new Pug();
	echo $pug->render(__DIR__ . "/../resources/templates/index.pug");
?>