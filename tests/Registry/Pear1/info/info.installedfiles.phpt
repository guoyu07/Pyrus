--TEST--
Xml registry: test installedfiles info property
--FILE--
<?php
require __DIR__ . '/setup.php.inc';
$dir = __DIR__ . DIRECTORY_SEPARATOR . 'testit' . DIRECTORY_SEPARATOR;
require __DIR__ . '/../../AllRegistries/info/installedfiles.template';

?>
===DONE===
--CLEAN--
<?php
$dir = __DIR__ . '/testit';
include __DIR__ . '/../../../clean.php.inc';
?>
--EXPECT--
===DONE===