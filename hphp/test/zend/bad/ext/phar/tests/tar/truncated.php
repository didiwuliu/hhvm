<?php
try {
	$p = new PharData(dirname(__FILE__) . '/files/trunc.tar');
} catch (Exception $e) {
	echo $e->getMessage() . "\n";
}

?>
===DONE===
<?php error_reporting(0); ?>
<?php
unlink(dirname(__FILE__) . '/' . basename(__FILE__, '.php') . '.phar.tar');
unlink(dirname(__FILE__) . '/' . basename(__FILE__, '.php') . '.phar');
?>