<?php

/* 
	str_contains polyfill for PHP versions older than 8.0
	ct8 does not support PHP 8.0 yet, so this has to be done
*/
if (!function_exists('str_contains')) {
    function str_contains(string $haystack, string $needle): bool {
        return '' === $needle || false !== strpos($haystack, $needle);
    }
}

if (isset($_GET["time"])) {
	$temp = strtolower($_GET["time"]);
	if (str_contains($temp, "pm")) {
		// Convert from PM
		$calc = explode("pm", $temp)[0];
		if (!str_contains($calc, ":")) {
			$calc = $calc . ":00";
		}
		$calc = explode(":", $calc)[0] + 12 . ":" . explode(":", $calc)[1];
		$calc = str_replace(" ", "", $calc);
	}
	else if (str_contains($temp, "am")) {
		// Convert from AM
		$calc = explode("am", $temp)[0];
		if (!str_contains($calc, ":")) {
			$calc = $calc . ":00";
		}
		$calc = str_replace(" ", "", $calc);
	}
	else {
		// Trigger an error
		$calc = "Your request got depressed, and can't be processed.";
	}
}

require_once "index.view.php";