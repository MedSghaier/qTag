<?php

//available languages
$available = ['fr', 'en'];


// asign the Browser default Language to $lang var
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Check if user chose a lang and assign it to $lang var
if (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
}

// Check if $lang var contains a valid language, if not! use default one
if (!in_array($lang, $available)) {
    $lang = 'fr';
}
// $lang = 'en';
// This will return an array for the chosen lang
return include_once  $lang . '.php';

function trans($key, $lang) {
	foreach (explode('.', $key) as $segment) {
		if (!is_array($lang) || !array_key_exists($segment, $lang)) {
			return value($default);
		}
		$lang = $lang[$segment];
	}
	return ucfirst($lang);
}
