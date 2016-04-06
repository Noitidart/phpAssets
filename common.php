<?php
	function str_replace_first($haystack, $needle, $replace) {
		$pos = strpos($haystack, $needle);
		if ($pos !== false) {
			$newstring = substr_replace($haystack, $replace, $pos, strlen($needle));
		}
		return $newstring;
	}
?>