<?php

// simplify url's for files in public directory.
// just enter path to file starting from inside
// of public directory.
function url_for($script_path){
	// add the leading '/' if not present
	if($script_path[0] != '/'){
		$script_path = "/" . $script_path;
	}
	return WWW_ROOT . $script_path;
}

function url_from_shared($script_path){
	// * will find root project directory from shared directory
	$shared_end = strpos(__DIR__, '/shared') + 7;
	$doc_root = substr(__DIR__, 0, $shared_end);
	define("WWW_ROOT", $doc_root);

	// add the leading '/' if not present
	if($script_path[0] != '/'){
		$script_path = "/" . $script_path;
	}
	return WWW_ROOT . $script_path;
}

?>