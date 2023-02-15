<?php
header('Cache-Control: max-age=31536000');

	define('ABSPATH', dirname(__FILE__));
	define('HTML_ROOT', '/federation2023/app');

function write_to_console($data) {
 $console = $data;
 if (is_array($console))
 $console = implode(',', $console);

 echo "<script>console.log('Console: " . $console . "' );</script>";
}
write_to_console('ABSPATH = ' . ABSPATH);
write_to_console('HTML_ROOT = ' . HTML_ROOT);
