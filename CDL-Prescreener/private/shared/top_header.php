<?php
if ($source == "index") {
    require_once "private/initialize.php";
    require_once "private/db_queries.php";
} else {
    require_once "../private/initialize.php";
    require_once "../private/db_queries.php";
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>CDL Prescreener</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<?php if ($source == "index") {?>
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<?php } else {?>
				<link rel="stylesheet" href="../assets/css/main.css" />
				<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
		<?php }
?>
	</head>
	<body class="is-preload">
        		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">
