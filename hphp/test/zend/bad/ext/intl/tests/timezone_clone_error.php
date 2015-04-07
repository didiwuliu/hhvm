<?php
ini_set("intl.error_level", E_WARNING);

class A extends IntlTimeZone {
function __construct() {}
}

$tz = new A();
var_dump($tz);
try {
var_dump(clone $tz);
} catch (Exception $e) {
	var_dump(get_class($e), $e->getMessage());
}

?>
==DONE==
