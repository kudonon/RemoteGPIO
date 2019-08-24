<?php
#Uses shell to execute mode and write functions that control the Pi GPIO
$output = shell_exec("gpio mode ".$_GET['pin']." out");
$output = shell_exec("gpio write ".$_GET['pin']." ".$_GET['status']);
echo "<a href=\"index.html\">Return</a>"
?>
